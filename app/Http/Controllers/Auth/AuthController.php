<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Requests\StoreBlogPost;
use App\Http\Services\LoginServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    public function login(Request $request){
        $result = $request->all();
        $email = $result['email'];
        $password = $result['password'];
//        dd($result);
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $data['name'] = Auth::user()->name;
            $data['email'] = Auth::user()->email;
            // Authentication passed...
            return $data;
        }
        else {
            return 'false';
        }
    }
    public function postStore(StoreBlogPost $request,LoginServices $loginServices){
        if($request){
            $result = $request->all();
            $result['password'] = bcrypt($result['password']);
            $auth_user = $loginServices->getLoginUser($result['email']);
            if(!empty($auth_user)){
                //        this user is registered
                return 0;
                back()->withInput();
            }
            //        Create a new user
            $user = User::create($result);
            if($user){
                Auth::login($user);
                $data['status'] = 1;
                $data['name'] = Auth::user()->name;
                $data['email'] = Auth::user()->email;
                return $data;
            }
            return back()->withInput();
        }
    }



    public function logout(Request $request){
        if(request()->ajax()){
            Auth::logout();
            return 'true';
        }

    }

}
