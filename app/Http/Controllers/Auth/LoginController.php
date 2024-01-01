<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected $username;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        if (auth()->user()->hasRole('admin')) {
            return to_route('backoffice.dashboard');
        }
        return to_route('front');
    }

    public function show()
    {
        

        $data = [
            'title' => "Login"
        ];
        return view('auth.login', $data);
    }

    public function login(LoginRequest $request)
    {
        $input = $request->all();
  
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(auth()->attempt(array($fieldType => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->hasRole('admin')) {
                return to_route('backoffice.dashboard');
            }
            return to_route('front');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors([
                    'message' => 'Username atau Password tidak cocok!'
                ]);
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return redirect('/');
    }


}
