<?php

    require("./conex.php");
    ## ARQUIVO RESPONSÁVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DADOS##

#função responsável por inserir os dados do banco

function CreateCurso($nome){
    //recebe o retorno da função com a conexão aberta
    $link = abreConex ();

    //variavel responsável por definir a query SQL a ser disparada no banco
    $query = "insert into tb_curso(nome) values ({$nome})";


    try{
        mysqli_query($link, $query);
        return true;
    } catch (Throwble $th){
        throw new \Exception("Erro ao gravar no banco", 1);
        return false;
    }finally{
        mysqli_close($link);
    }
}