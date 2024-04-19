<?php
namespace App\Src;

use App\Src\IMensageiro;

class Whatsapp implements IMensageiro {
    protected $mensagem;

    public function enviar($mensagem){
        if($mensagem){
            echo "Enviando mensagem via WhatsApp: $mensagem\n";
        }
    }

}