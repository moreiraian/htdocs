<?php
 if($_SERVER ['REQUEST_METHOD'] === "POST"){
    $nome = filter_input (INPUT_POST, "txtNome");
    $preco = filter_input (INPUT_POST, "txtPreco");
    $quantidade = filter_input (INPUT_POST, "txtQtd");
    $imagem = filter_input( INPUT_POST, "flImg");

   echo "$nome<br>$quantidade<br>$preco<br>$imagem <br>";
?>