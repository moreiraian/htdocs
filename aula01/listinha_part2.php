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
            <?php

                $valorR = 420;
                $valorD = 4.2;
                $conv = $real / $dolar;

                echo "#12 <br>";
                echo "Cotação do dolar: $valorD<br>";
                echo "R$ 420,00 em dolar são: US$$conv <hr>";

                $valor = 100;
                $reaj = $valor*0.10;

                echo "#13 <br>";

                echo "O valor é $valor <br>"; 
                echo "O valor com reajuste fica: $reaj <hr>";


                $salario = 1000;
                $reajuste = 0.5;

                $salarioReajuste = $salario + ($salario * $reajuste);

                echo "#14 <br>";

                echo "O salário é: $salario<br>";
                echo "O reajuste é: $reajuste<br>";
                echo "O Salário com o reajuste é: $salarioReajuste <hr>";

                
               ?>
                               

                   <div class="container">
                    <fieldset>
                        <legend> Calculo de valores </legend>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label> Informe salario </label>
                                <input type="number" step="1" name="salario" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Informe o segundo valor </label>
                                <input type="number" step="1"   name="valor02" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-dark"> Calcular! </button>
                        </form>
                    </fieldset>
                </div>

            
 
            </div>
        </div>  
        

</body>
</html>