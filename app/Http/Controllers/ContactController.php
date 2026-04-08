<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        try {
            // Enviar email a la empresa
            Mail::to(config('mail.to_address', 'contacto@strategalsl.com'))
                ->send(new ContactMail($request->validated()));

            return back()->with('success', '¡Mensaje enviado correctamente! Nos pondremos en contacto contigo pronto.');
        } catch (\Exception $e) {
            return back()->with('error', 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo o contáctanos por teléfono.')
                        ->withInput();
        }
    }
}
