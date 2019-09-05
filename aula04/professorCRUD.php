<?php

    require("./conex.php");
    ## ARQUIVO RESPONSÁVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DADOS##

#função responsável por inserir os dados do banco

function CreateProfessor($nome){
    //recebe o retorno da função com a conexão aberta
    $link = abreConex ();

    //variavel responsável por definir a query SQL a ser disparada no banco
    $query = "insert into tb_professor(nome) values ({$nome})";


    try{
        if(mysqli_query($link, $query)){
            $id = mysqli_insert_id (); //resgata o ID gerado 
            $query = "insert into tb_telefone(numero, professor_id) values ('{$telefone}'.'{$cpf}'";
        };
        return true;
    } catch (Throwble $th){
        throw new \Exception("Erro ao gravar no banco", 1);
        return false;
    }
}