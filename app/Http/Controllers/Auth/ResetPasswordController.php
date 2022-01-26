<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    use ResetsPasswords;
    public function showResetForm(Request $request, $token = null)
{
    return view('auth.passwords.reset')->with(
        ['token' => $token, 'email' => $request->email]
    );
}public function reset ()
{
    $this->validate($request, $this->rules(), $this->validationErrorMessages());
}
protected function rules()
{
    return [
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed|min:6',
    ];
}
}
