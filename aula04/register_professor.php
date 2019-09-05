<?php
    #arquivo responsavel por resgatar e registrar os dados vindo do formulário de cadastro

    require("./professorCRUD.php");    
    /*$nome = $_POST['txtNome'];
    $preco = $_POST['txtPreco'];
    $quantidade = $_POST['txtQtd'];
    $imagem = $_POST['flImg'];*/
    
    if($_SERVER ['REQUEST_METHOD'] === "POST"){
    $professor = filter_input (INPUT_POST, "teacher") ?? "";
   

        if(createProfessor($professor)){
            echo "Professor registrado com sucesso";
        }else{
            echo "falha ao registrar o nome do professor";
        }
       
        
   #redirecionamento de pagina
     }else{
        header('Location: cadastrar_professor.php');
    };