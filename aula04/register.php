<?php
    #arquivo responsavel por resgatar e registrar os dados vindo do formulário de cadastro

    /*$nome = $_POST['txtNome'];
    $preco = $_POST['txtPreco'];
    $quantidade = $_POST['txtQtd'];
    $imagem = $_POST['flImg'];*/
    
    if($_SERVER ['REQUEST_METHOD'] === "POST"){
    $nome = filter_input (INPUT_POST, "txtNome");
    $preco = filter_input (INPUT_POST, "txtPreco");
    $quantidade = filter_input (INPUT_POST, "txtQtd");
    $imagem = filter_input( INPUT_POST, "flImg");

   echo "$nome<br>$quantidade<br>$preco<br>$imagem <br>";
     }else {
        header('Location: cadastrar.php');
    };