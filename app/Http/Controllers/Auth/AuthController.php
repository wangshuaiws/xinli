<?php

namespace App\Http\Controllers\Auth;

/*use App\Http\Requests\Request;*/
use App\User;
use Illuminate\Http\Request;
use Validator;
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

    protected $username = 'login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    protected function getCredentials(Request $request)
    {
        $login = $request->get('login');
        $filed = filter_var($login,FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        return [
            $filed => $login,
            'password' => $request->get('password')
        ];
    }


    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'sex' => $data['sex'],
            'birthday' => $data['birthday'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'permission' => 0,
        ]);
    }
}
