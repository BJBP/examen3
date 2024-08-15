<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Asegúrate de importar el modelo Contact
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido; // Asegúrate de importar la clase Mailable

class ContactoController extends Controller
{
    public function showForm()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        // Guarda los datos en la base de datos
        $contact = Contact::create($validatedData);

        // Envía un correo electrónico
        Mail::to('tu_correo@example.com')->send(new MensajeRecibido($contact));

        return redirect()->route('contacto')->with('success', '¡Mensaje enviado exitosamente!');
    }
}