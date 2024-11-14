<?php
namespace App\Http\Controllers;

use App\Mail\CorreoBienvenida;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    public function enviarCorreo()
    {
        $data = [
            'nombre' => 'Nora',
        ];

        Mail::to('nps_22@hotmail.com')->send(new CorreoBienvenida($data));

        return 'Correo enviado!';
    }
}
