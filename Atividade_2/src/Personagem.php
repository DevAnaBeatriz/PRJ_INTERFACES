<?php

namespace App\Src;

interface Personagem {
    public function Atacar(
        $nomeDoGolpe, $pontosDeDano
    );
}
