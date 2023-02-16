<?php

namespace App\Http\Controllers;

use Request;
use App\Mail\SendMailUser;
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

        Mail::to("mauropeniel7@gmail.com")->send(new Email_contacto($data));
        return back()->with('success','Mensagem enviada com sucesso');
    }
    public function teste()
    {
        return view('bemVindo')
    }
}
