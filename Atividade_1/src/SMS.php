<?php
namespace App\Src;

use App\Src\IMensageiro;

class SMS implements IMensageiro {
    protected $mensagem;

    public function enviar($mensagem){
        if($mensagem){
            echo "Enviando mensagem via SMS: $mensagem\n";
        }
    }

}