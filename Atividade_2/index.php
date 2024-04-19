<?php
require 'vendor/autoload.php';

use App\Src\Mago;
use App\Src\Guerreiro;
use App\Src\Arqueiro;

$mago = new Mago();
$guerreiro = new Guerreiro();
$arqueiro = new Arqueiro();

$mago->Atacar("Chamas Arcanas", "220");
$guerreiro->Atacar("Golpe Pesado", "300");
$arqueiro->Atacar("Chuva de Flechas", "155");

