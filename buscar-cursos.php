#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use Gabrielbn123\BuscadorCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new client([
    'base_uri' => 'https://www.alura.com.br/',
    'verify' => false
]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    mensagem($curso);
}
