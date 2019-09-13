<?php
    #arquivo responsavel por resgatar e registrar os dados vindo do formulário de cadastro

    require("./disciplinaCRUD.php");    
    /*$nome = $_POST['txtNome'];
    $preco = $_POST['txtPreco'];
    $quantidade = $_POST['txtQtd'];
    $imagem = $_POST['flImg'];*/
    
    if($_SERVER ['REQUEST_METHOD'] === "POST"){
    $nome = filter_input (INPUT_POST, "txtNome") ?? "";
   

        if(createDisciplina($nome)){
            echo "disciplina gravada com sucesso";
        }else{
            echo "falha ao gravar o nome da disciplina";
        
       
        }   
   #redirecionamento de pagina
     }else {
        header('Location: cadastrar_disciplina.php');
    };