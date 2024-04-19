<?php

namespace App\Src;

use App\Src\Personagem;

class Arqueiro implements Personagem
{
    public function Atacar($nomeDoGolpe, $pontosDeDano)
    {
        $classe = 'Arqueiro';

        echo "🏹 $classe ataca com $nomeDoGolpe, causando $pontosDeDano pontos de dano!\n";
    }
}

