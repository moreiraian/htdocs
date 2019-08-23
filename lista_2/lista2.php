
    <!DOCTYPE <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title> Site em PHP </title>   
    </head>
    <body>
   
                <div class="container ">
                    <fieldset>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" placeholder = "Questão 1" class="form-control" 
                                required id="id_nome" name="valor1">
                            </div>
                          
                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </form>
                    </fieldset>
                </div>
                <br> 
                <div class="container">
                <?php 
                $valor01 = isset($_POST['valor1']) ? $_POST ['valor1'] : 0;
                if ($valor01 <0)
                echo "<br>" .($valor01*-1);
                else
                echo $valor01;
                ?>
                <!-- 2 -->
                <div class="container ">
                    <fieldset>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" placeholder = "Questão 2" class="form-control" 
                                required id="id_nome" name="valor2">
                            </div>
                          
                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </form>
                    </fieldset>
                </div>
                <br> 
                <div class="container">
                <?php 
                $valor02 = isset($_POST['valor2']) ? $_POST ['valor2'] : 0;
                if ($valor02%2 >0)
                echo "ímpar" ;
                else
                echo "par";
               
                ?>
                <!-- 3 -->
                <div class="container ">
                    <fieldset>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" placeholder = "Questão 3" class="form-control" 
                                required id="id_nome" name="valor3">
                            </div>
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" placeholder = "Questão 3" class="form-control" 
                                required id="id_nome" name="valor3a">
                            </div>
                          
                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </form>
                    </fieldset>
                </div>
                <br> 
                <div class="container">
                <?php 
                
                if($valor03 = isset($_POST['valor3']) && ($_POST['valor3'] != 0) && ($_POST['valor3a'])){
                $valor03 =$_POST["valor3"];
                $valor03a =$_POST["valor3a"];
                if ($valor03%$valor03a == 0)
                echo "Múltiplos";
                else
                echo "Não são múltiplos" ;};
                
                ?>
         </div>
    </body>
    </html>