<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use Illuminate\Support\Facades\URL;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Google\Service\CloudSearch\Id;
use App\Mail\CustomResetPasswordMail;



class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
{

    $request->validate([
        'email' => ['required', 'email'],
    ]);

    $user = User::where('email', $request->email)->first();
    if (!$user) {
        return back()->withInput($request->only('email'))->withErrors(['email' => 'No se ha encontrado un usuario con esa dirección de correo.']);
    }

    // Crear un enlace temporal firmado para establecer la contraseña
    $link = URL::temporarySignedRoute('set.password', now()->addHours(1), ['id' => $user->id]);

    // Enviar el correo con el enlace de restablecimiento de contraseña
    Mail::to($user->email)->send(new CustomResetPasswordMail($user, $link));
    return redirect()->route('login')->with('success', __('A password reset link has been sent. Check your email'));
}

}
