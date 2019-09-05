<?php
    #arquivo responsavel por resgatar e registrar os dados vindo do formulário de cadastro

    require("./cursoCRUD.php");    
    /*$nome = $_POST['txtNome'];
    $preco = $_POST['txtPreco'];
    $quantidade = $_POST['txtQtd'];
    $imagem = $_POST['flImg'];*/
    
    if($_SERVER ['REQUEST_METHOD'] === "POST"){
    $nome = filter_input (INPUT_POST, "txtNome") ?? "";
   

        if(createCurso($nome)){
            echo "curso gravado com sucesso";
        }else{
            echo "falha ao gravar o nome do curso";
        
       
        }   
   #redirecionamento de pagina
     }else {
        header('Location: cadastrar_curso.php');
    };