<?php

$address = 'localhost';
$db = 'teste-product';
$user = 'postgres';
$password = 'root';


try {
    $pdo = new PDO("pgsql:host=$address;port=5432;dbname=$db",
        $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "select SUBSTRING (pm.data_integracao::text, 0, 8), sum(pd.quant::numeric), pd.produto
            FROM pedido_detalhe_produto_integracao_bling pd
            INNER JOIN pedido_master_produto_integracao_bling pm ON pd.pedido_integracao = pm.pedido_integracao
            group by SUBSTRING (pm.data_integracao::text, 0, 8),  pd.produto limit 10";

    foreach ($pdo->query($sql) as $row) {

    }

} catch (PDOException $e) {
    die($e->getMessage());
}