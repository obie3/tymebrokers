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


class EloquentUserRepository implements UserContract{

    public function create($request) {
        try {
            $name_slug = preg_replace('/\s+/', '-', $request->surname. ' '. $request->other_names);
            $role = $request->user_type == 'admin' ? 'admin' : 'user';
            $request['account_number'] = rand(10,99).rand(100,999).rand(100,990).rand(10,99);
            $request['name_slug'] = $name_slug;
            $request['role'] = $role;
            $credentials = $this->setUserProperties($request);
            $user = Sentinel::registerAndActivate($credentials);
            $role = Sentinel::findRoleBySlug($role);
            $role->users()->attach($user);
            //$this->sendEmail($credentials);
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

    public function findAllUser() {
        return User::with('account_balance')
            ->where('user_type', 'user')
            ->get();
    }

    public function findUserByAccountStatus($status) {
        return User::with('account_balance')
            ->where('status', $status)
            ->where('user_type', 'user')
            ->get();
    }

    public function findById($id) {
        return User::with(['transaction'])
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

    public function modifyTransfer($request){
        $account = $this->findById($request->id);
        $account->status = $account->status == 'active' ? 'disabled' : 'active';
        return $account->save();
    }

    public function updatePassword($request, $slug) {
        $credentials = [
            'password' => $request->password,
            'update_password' => 1
        ];
        $user = $this->findBySlug($slug);
        $user->update_password = 1;
        Sentinel::update($user, $credentials);
        return $user;
    }

    public function generateToken() {
        $email = Sentinel::getUser()->email;
        $otp = new Otp();
        $status = $otp->generate($email, 4, 10);
        if($status->status) {
           return $this->sendOTP();
        }
    }

    public function validateToken($token){
        $email = Sentinel::getUser()->email;
        $otp = new Otp();
        return $otp->validate($email, $token);
    }

    private function sendEmail() {
        try {
            $data = array(
                'account_number' => $request['account_number'],
                'email' => $request['email'],
                'password' => $request['password'],
                'phone' => $request['phone_number'],
                'surname' => $request['surname']
            );
             Mail::send('emails.emailTemplate', $data,  function($message) use ($data) {
                $message->from('hello@e-thrift.com', "Admin");
                $message->to($data['email']);
                $message->subject("e-Thrift Account details");
            });
            return Mail::failures() ? false : true;
        }
        catch (\Exception $ex) {
            return $ex;
        }
    }

    private function sendOTP() {
        try {
            $data = array(
                'email' => $request['email'],
                'otp' => $request['otp'],
                'surname' => $request['surname']
            );
             Mail::send('emails.emailTemplate', $data,  function($message) use ($data) {
                $message->from('hello@e-thrift.com', "Admin");
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
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'account_number' => $request->account_number,
            'password' => 'secret',
            'user_type' => $request->user_type,
            'user_role' =>  $request->role,
            'slug' => strtolower($request->name_slug),
        ];
    }
}

?>




