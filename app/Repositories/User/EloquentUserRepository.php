<?php
namespace App\Repositories\User;

use App\User;
use Session;
use Mail;
use Sentinel;
use Otp;
use App\Repositories\User\UserContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Events\UserCreated;
use App\Events\UserUpdated;



class EloquentUserRepository implements UserContract{

    public function create($request) {
        try {
            $name_slug = preg_replace('/\s+/', '-', $request->surname. ' '. $request->other_names);
            $role = isset($request->user_type) ? 'admin' : 'user';
            $request->account_number = rand(10,99).rand(100,999).rand(100,990).rand(10,99);
            $request->name_slug = $name_slug;
            $request->role = $role;
            $credentials = $this->setUserProperties($request);
            $user = Sentinel::registerAndActivate($credentials);
            $role = Sentinel::findRoleBySlug($role);
            $role->users()->attach($user);
            //$email_response = $this->sendEmail($credentials);
            if($role->name == 'user') {
                $nUser = $user->toArray();
                $nUser['request'] = $request;
                event(new UserCreated($nUser));
            }
            return $user;

        }
        catch(\Exception $ex) {
            return false;
        }
    }

    public function recentData() {
        return User::where('user_type', 'user')->orderBy('created_at', 'desc')->take(10)->get();
    }


    public function findAllUser() {
        return User::with(['account_balance', 'account_details'])
            ->where('user_type', 'user')
            ->get();
    }

    public function findUserByAccountStatus($status) {
        return User::with(['account_balance', 'account_details'])
            ->where('status', $status)
            ->where('user_type', 'user')
            ->get();
    }

    public function findById($id) {
        return User::with(['transaction', 'account_details'])
            ->where('id', $id)
            ->first();
    }

    public function findRecipient($param) {
        return User::where('email', $param)
            ->orWhere('phone_number', $param)
            ->orWhere('account_number', $param)
            ->orWhere('id', $param)
            ->first();
    }

    public function updatePassword($request) {
        $user = Sentinel::getUser();
        $credentials = [
            'password' => $request->new_password,
            'clear_pword' => $request->new_password,
        ];
        return Sentinel::update($user, $credentials);
    }

    public function updateUserProfile($request) {
        $user = Sentinel::getUser();
        $name_slug = preg_replace('/\s+/', '-', $request->surname. ' '. $request->other_names);
        $role = isset($request->user_type) ? 'admin' : 'user';
        $request->name_slug = $name_slug;
        $request->role = $role;
        $credentials = $this->setUserProperties($request);
        $user = Sentinel::update($user, $credentials);
        $nUser = $user->toArray();
        $nUser['request'] = $request;
        event(new UserUpdated($nUser));
        return $user;


    }

    public function modifyTransfer($request){
        $account = $this->findById($request->id);
        $account->status = $account->status == 'active' ? 'disabled' : 'active';
        return $account->save();
    }

    public function generateToken() {
        $user = Sentinel::getUser();
        $otp = new Otp();
        $status = $otp->generate($user->email, 4, 10);
        if($status->status) {
            $user->token = $status->token;
           return $this->sendOTP($user);
        }
    }

    public function validateToken($token){
        $email = Sentinel::getUser()->email;
        $otp = new Otp();
        return $otp->validate($email, $token);
    }

    private function sendEmail($request) {
        try {
            $data = array(
                'account_number' => $request['account_number'],
                'email' => $request['email'],
                'password' => $request['password'],
                'phone' => $request['phone_number'],
                'surname' => $request['surname']
            );
             Mail::send('emails.emailTemplate', $data,  function($message) use ($data) {
                $message->from('hello@tymebrokers.com', "Admin");
                $message->to($data['email']);
                $message->subject("Tymebrokers.com Account details");
            });
            return Mail::failures() ? false : true;
        }
        catch (\Exception $ex) {
            \Log::info('errro sending email...'.$ex);
            return $ex;
        }
    }

    private function sendOTP($user) {
        try {
            $data = array(
                'email' => $user->email,
                'token' => $user->token,
                'surname' => $user->surname
            );
             Mail::send('emails.emailtoken', $data,  function($message) use ($data) {
                $message->from('hello@tymebrokers.com', "Admin");
                $message->to($data['email']);
                $message->subject("One Time Password");
            });
            return Mail::failures() ? false : true;
        }
        catch (\Exception $ex) {
            return $ex;
        }
    }

    private function setUserProperties($request) {
        return [
            'surname' => $request->surname,
            'other_names' => $request->other_names,
            'username' => $request->username,
            'clear_pword' => $request->password,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'account_number' => $request->account_number,
            'password' => $request->password,
            'user_type' => $request->role,
            'user_role' =>  $request->role,
            'slug' => strtolower($request->name_slug),
        ];
    }
}

?>




