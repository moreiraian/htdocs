<?php

        require './disciplinaCRUD.php';

        if (isset($_SERVER['HTTP_REFERER'])){
        if ($_SERVER['HTTP_REFERER'] == 'http://localhost/aula04/listar_disciplina.php' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = filter_input( INPUT_GET, 'id');
            excluirDisciplina ($id);
            exit;

           
        }
    }
       
        function excluirDisciplina ($id){
            if(deleteDisciplina($id)){
                echo "Excluído";
                echo "<a href= 'listar_disciplina.php'> Voltar a lista </a>";
            }
            else{
                echo "Erro";
                echo "<a href= 'listar_disciplina.php'> Voltar a lista </a>";
            }
        } 
        
        header('Location: index.php');