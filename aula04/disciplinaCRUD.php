<?php

    require("./conex.php");
    ## ARQUIVO RESPONSÁVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DADOS##

#função responsável por inserir os dados do banco

function CreateCurso($nome){
    //recebe o retorno da função com a conexão aberta
    $link = abreConex ();

    //variavel responsável por definir a query SQL a ser disparada no banco
    $query = "insert into tb_curso(nome) values ('{$nome}')";

    try{
        if (mysqli_query($link, $query));
        return true;
    } catch (Throwble $th){
        throw new \Exception("Erro ao gravar no banco", 1);
        return false;
    }finally{
        mysqli_close($link);
    }
}
    #funçao por listar todos os cursos
    function getCursos(){
        $link = abreConex();
        $query = "select * from tb_curso";

        try{
        /** @$rs (ResultSet) - variavel responsável por guardar  o resultado vindo do banco de dados8 */ 
           $rs = mysqli_query($link, $query); //* o que vier de resultado será entregue a variavel $rs */
           $listaCursos = Array (); //* conter todos os cursos que estão registrados na tb_vurso
            
           //* caso tenha resultado $row recebe registro de curso($row), caso não tenha mais registros receberá null
           while($row = mysqli_fetch_assoc($rs)){    
                array_push($listaCursos, $row);
            }

            return $listaCursos;
        } catch (Throwble $th){
            throw new \Exception("Erro ao gravar no banco", 1);
            return Array();
        }finally{
            mysqli_close($link);
        }
    }
    #função responsável por excluir o curso
    function DeleteCurso($id){
        //recebe o retorno da função com a conexão aberta
        $link = abreConex ();
    
        //variavel responsável por definir a query SQL a ser disparada no banco
        $query = "delete from tb_curso where idcurso= {$id}";
    
    
        try{
            if (mysqli_query($link, $query));
            return true;
        } catch (Throwble $th){
            throw new \Exception("Erro ao deletar do banco", 1);
            return false;
        }finally{
            mysqli_close($link);
        }
    }
    
    #função responsável por alterar o curso
    function updateCurso($idcurso, $nome){
        //recebe o retorno da função com a conexão aberta
        $link = abreConex ();
    
        //variavel responsável por definir a query SQL a ser disparada no banco
        $query = "update tb_curso set nome = '{$nome}' where idcurso = {$idcurso}";
    
    
        try{
            if (mysqli_query($link, $query));
            return true;
        } catch (Throwble $th){
            throw new \Exception("Erro ao editar do banco", 1);
            return false;
        }finally{
            mysqli_close($link);
        }
    }
    