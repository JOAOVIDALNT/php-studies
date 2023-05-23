<?php
require '../vendor/autoload.php';

use GuzzleHttp\Client as ClientAlias;
use Symfony\Component\DomCrawler\Crawler; // adaptação para $crawler = new \Symfony\Component\DomCrawler\Crawler();

$client = new ClientAlias();

$response = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

$html = $response->getBody();

$crawler = new Crawler();

$crawler->addHtmlContent($html);

$cursos = $crawler->filter('span.card-curso__nome');

foreach ($cursos as $curso) {
    echo $curso->textContent . PHP_EOL;
}


