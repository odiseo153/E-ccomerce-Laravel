<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    protected $redirectTo = '/products';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated($user)
    {
        // Guardar la URL de la imagen del usuario en la sesión
        session(['imagen' => $user->image]);

        // Redirigir a la página deseada
        return redirect()->intended($this->redirectTo);
    }
}
