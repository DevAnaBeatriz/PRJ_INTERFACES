<?php

namespace App\Src;

use App\Src\Personagem;

class Guerreiro implements Personagem
{
    public function Atacar($nomeDoGolpe, $pontosDeDano)
    {
        $classe = 'Guerreiro';

        echo "⚔️ $classe desfere o golpe $nomeDoGolpe, causando $pontosDeDano pontos de dano!\n";
    }
}

