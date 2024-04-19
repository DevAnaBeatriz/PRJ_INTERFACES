<?php

namespace App\Src;

use App\Src\Personagem;

class Mago implements Personagem
{
    public function Atacar($nomeDoGolpe, $pontosDeDano)
    {
        $classe = 'Mago';

        echo "🔮 $classe conjura o feitiço $nomeDoGolpe, causando $pontosDeDano pontos de dano!\n";
    }
}

