<?php

$forma_conducao = $_POST["forma_conducao"];


include("conecta.php");

    $comando = $pdo->prepare("INSERT INTO forma_conducao VALUES (forma_conducao");

    $resultado = $comando->execute();
echo("{\"resultado\":1}"); 

?>