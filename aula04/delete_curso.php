<?php

        require './cursoCRUD.php';

        if ($_SERVER['REQUEST_METHOD'] !== 'get'){
            header('Location: index.php')
        }

        $id = filter_input( INPUT_GET, 'id');
        excluirCurso ($id);
        
        function excluirCurso ($id){
            if(deleteCurso($id)){
                echo "Excluído"
                echo "<a href= 'listar_curso.php'> Voltar a lista </a>"
            }
            else{
                echo "Erro"
                echo "<a href= 'listar_curso.php'> Voltar a lista </a>"
            }
        }