<?php
require 'vendor/autoload.php';

use App\Src\IMensageiro;
use App\Src\Email;
use App\Src\SMS;
use App\Src\Whatsapp;

$Whatsapp = new Whatsapp();
$Whatsapp->enviar("Ana Beatriz");

$SMS = new SMS();
$SMS->enviar("Ana Paula");

$Email = new Email();
$Email->enviar("Ana Sofia");