<?php

namespace App\Http\Controllers;

use Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email_contacto;

class webController extends Controller
{
    //Metodo para enviar email
    public function enviar_email(){

        $data = array(
            'nome'      =>  Request::input('nome'),
            'email'      =>  Request::input('email'),
            'apelido'   =>   Request::input('apelido'),
            'mensagem'   => Request::input('mensagem'),
        );

        Mail::to(Request::input('email'))->send(new SendMail($data));

        return back()->with('success','Mensagem enviada com sucesso');
    }
    public function teste()
    {
        return view('bemVindo');
    }
}
