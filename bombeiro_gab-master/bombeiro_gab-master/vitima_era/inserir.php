<?php
    include("conecta.php");
    $FK_IdOcorrencia = 3; //$_SESSION["id"];

    $Deitada = 
    $SemiSentada 
    $Sentada 

    $comando = $pdo->prepare("INSERT INTO forma_conducao (FK_IdOcorrencia, Deitada, SemiSentada, Sentada) VALUES (:FK_IdOcorrencia, :Deitada, :SemiSentada, :Sentada)");
    $comando->bindParam(':FK_IdOcorrencia', $FK_IdOcorrencia);
    $comando->bindParam(':Deitada', $Deitada);
    $comando->bindParam(':SemiSentada', $SemiSentada);
    $comando->bindParam(':Sentada', $Sentada);

    
    $resultado = $comando->execute();

    echo "{\"resposta\":1}";
?>
