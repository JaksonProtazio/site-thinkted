<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;

class ContatoController extends Controller
{
    public function enviaContato(Request $requisicao)
    {
      $email = $requisicao->all();
      $bool1 = false;
      $bool2 = false;
      $bool3 = false;
      $bool4 = false;

      if (is_string($email['nome']))
      {
        $bool1 = true;
      }
      if(is_string($email['email']))
      {
        $bool2 = true;
      }

      if(is_string($email['assunto']))
      {
        $bool3 = true;
      }

      if (is_string($email['mensagem']))
      {
        $bool4 = true;
      }

      if($bool1 and $bool2 and $bool3 and $bool4 ){
        Mail::to('thinkted@uea.edu.br')->send(new ContatoEmail($requisicao));

        return redirect()->back();

      }else{
        return redirect()->back();
      }

    }
}
