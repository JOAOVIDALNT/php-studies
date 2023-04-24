<?php


$xml = simplexml_load_file('arquivo.xml');

$url = 'https://bling.com.br/Api/v2/pedido/json/';

$token = 'a531d2d258041c260d90c3f8c60f7808904836b30a0751b7bcb7a77689f505343e3cdb3d';

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