<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> 
    </div>
            <div class="row bg-secondary p-2 text-white">
                <fieldset>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="id_nome"> Valor 1 </label>
                            <input type="number" class="form-control"  required id="id_nome" name="valor01">
                        </div>
                        <div class="form-group">
                            <label for="id_email"> Valor 2 </label>
                            <input type="number" class="form-control"  required id="id_email" name="valor02">
                        </div>
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </form>
                </fieldset>
            </div>
            <br>
            <div class="row">
            <?php   
            $valor01 = isset($_POST['valor01']) ? $_POST ['valor01'] : 0;
            $valor02 = isset($_POST['valor02']) ? $_POST ['valor02'] : 0;
            
            echo "<br>A divisão dos valores é:" .($valor01/$valor02);
            echo "<br>O quadrado do valor 1 é:" .($valor01*$valor01);
            echo "<br>O Cubo do valor 2 é:" .
            ($valor02*$valor02*$valor02);
            echo "<br><hr><br>";
            
            echo "#10: " .($valor01 % 2);
            echo "<br><hr><br>";
            echo "#11<br>" .($valor01-1);
            echo "<br>" .($valor01+1);
            echo "<br><hr><br>"; 
            ?>
            </div>
        </div>  
        

</body>
</html>