<?php
namespace App\Src;

use App\Src\IMensageiro;

class Email implements IMensageiro {
    protected $mensagem;

    public function enviar($mensagem){
        if($mensagem){            
            echo "Enviando e-mail: $mensagem\n";
        }
    }

}