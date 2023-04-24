<?php

$nomeBanco = 'João';

$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true; // FORMATA A SAÍDA DO XML


$cpf_cnpj = $dom->createElement('cpf_cnpj');
$cpf_cnpjValue = $dom->createTextNode('12545647');
$cpf_cnpj->appendChild($cpf_cnpjValue);

$tipoPessoa = $dom->createElement('tipoPessoa');
$tipoPessoaValue = $dom->createTextNode('F');
$tipoPessoa->appendChild($tipoPessoaValue);

$nome = $dom->createElement('nome');
$nomeValue = $dom->createTextNode($nomeBanco);
$nome->appendChild($nomeValue);

$cliente = $dom->createElement('cliente');
$cliente->appendChild($nome);
$cliente->appendChild($tipoPessoa);
$cliente->appendChild($cpf_cnpj);



$pedido = $dom->createElement('pedido'); // INSTÂNCIA DO NÓ PEIDO
$dom->appendChild($pedido); // ADICIONA O NÓ PEDIDO NO XML
$pedido->appendChild($cliente); // ADICIONA O NÓ NOME DENTRO DE PEDIDO





// SALVA O CONTEÚDO EM UMA VARIÁVEL
$xml = $dom->saveXML();
echo $xml;

// SALVA O CONTEÚDO EM UM ARQUIVO
$dom->save(__DIR__.'/arquivo.xml');

$url = 'https://bling.com.br/Api/v2/pedido/json/';
$token = '8e81fcfdd7253b9bd441fece9292894f5975362ec50c64ab3667475938e3f841c859f0d2';
$posts = array (
    "apikey" => $token,
    "xml" => rawurlencode($xml)
);
$retorno = executeSendOrder($url, $posts);
echo $retorno;
function executeSendOrder($url, $data){
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, $url);
    curl_setopt($curl_handle, CURLOPT_POST, count($data));
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handle);
    curl_close($curl_handle);
    return $response;
}


