<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Repositories\Login\LoginContract;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Sentinel;

class LoginController extends Controller
{
    protected $repo;
    // public function __construct(LoginContract $loginContract) {
    //     $this->repo = $loginContract;
    // }

    public function index() {
        if(Sentinel::check()) {
            $userRole = Sentinel::getUser()->roles()->first()->slug;
            if($userRole === 'admin') {
                return redirect()->route('admin.index');
            }
            return redirect()->route('user.index');
        }
        return view('auth.login');
    }

    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];
        try {
            if(Sentinel::authenticate($credentials)) {
                $authUser = Sentinel::getUser();
                if (Sentinel::getUser()->roles()->first()->slug === 'superadmin') {
                    return redirect()->route('admin.index');
                } else if (Sentinel::getUser()->roles()->first()->slug === 'admin') {
                    return redirect()->route('admin.index');
                } else if (Sentinel::getUser()->roles()->first()->slug === 'user') {
                    return redirect()->route('user.index');
                }
            } else {
                toastr()->error('Invalid Username or Password', 'Hello..' );
                return redirect()->back()->withInput();
            }
        } catch(ThrottlingException $e) {
            $delay = $e->getDelay();
            toastr()->error("Ops... You have been suspended for $delay seconds.", 'Hello..' );
            return redirect()->back();
        } catch(NotActivatedException $e){
            toastr()->error("Ops... Your account is not yet activated, please check your email for activation code or link", 'Hello..' );
            return redirect()->back();
        }
    }

    public function logout() {
        Sentinel::logout(null, true);
        return redirect()->route('auth.login.get');
    }
}
