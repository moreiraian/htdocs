<?php

        require './disciplinaCRUD.php';

        if (isset($_SERVER['HTTP_REFERER'])){
        if ($_SERVER['HTTP_REFERER'] == 'http://localhost/aula04/listar_disciplina.php' && $_SERVER['REQUEST_METHOD'] === 'POST'){
           
            $id = filter_input( INPUT_POST, 'txtId');  
            $disciplina = filter_input( INPUT_POST, 'txtNome');  
            atualizarDisciplina($id,$disciplina);
            exit;
        }        
    }
    function atualizarDisciplina($id, $disciplina){
        if(updateDisciplina($id, $disciplina)){
            echo "curso atualizado com sucesso!";
            echo "<a href= 'listar_disciplina.php'> Voltar a lista </a>";
        }else {
            echo "falha ao atualizar o curso.";
            echo "<a href= 'listar_disciplina.php'> Voltar a lista </a>";
        }
    }

    header('Location: index.php');