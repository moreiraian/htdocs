
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
                <!-- 4 -->
                <div class="container ">
                    <fieldset>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" placeholder = "Questão 4" class="form-control" 
                                required id="id_nome" name="valor4">
                            </div>
                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </form>
                    </fieldset>
                </div>
                <br> 
                <div class="container">
                <?php 
        
                $valor04 =isset($_POST['valor4']) ? $_POST ['valor4'] : 0;
                if ($valor04 > 0){ 
                    echo "Positivo!";}
                elseif ($valor04 == 0){
                    echo "Zero";}
                else {
                    echo "Negativo";
                }
                    

                 ?>
                <!-- 5 -->
                <div class="container ">
                    <fieldset>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" placeholder = "Questão 5" class="form-control" 
                                required id="id_nome" name="valor5">
                            </div>
                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </form>
                    </fieldset>
                </div>
                <br> 
                <div class="container">
                <?php 
        
                $valor05 =isset($_POST['valor5']) ? $_POST ['valor5'] : 0;
                if ($valor05 > 20)   {
                    echo "Não se encontra!";
                }elseif ($valor05 >= 5){
                    echo "Encontra-se";}
                if ($valor05 <5){
                    echo "Não se encontra!";
                };
                 
            
                 ?>
                <!-- 6 -->
                <div class="container ">
                    <fieldset>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" placeholder = "Questão 6" class="form-control" 
                                required id="id_nome" name="valor6">
                            </div>
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" placeholder = "Questão 6" class="form-control" 
                                required id="id_nome" name="valor6a">
                            </div>
                          
                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </form>
                    </fieldset>
                </div>
                <br> 
                <div class="container">
                <?php 
                
                $valor06 =isset($_POST['valor6']) ? $_POST ['valor6'] : 0;
                $valor06a =isset($_POST['valor6a']) ? $_POST ['valor6a'] : 0;
                if ($valor06 > $valor06a)
                echo ($valor06+$valor06a) ;
                else
                echo ($valor06*$valor06a);
                ?>
                <!-- 7 -->
                <div class="container ">
                    <fieldset>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" placeholder = "Questão 7" class="form-control" 
                                required id="id_nome" name="valor7">
                            </div>
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" placeholder = "Questão 7" class="form-control" 
                                required id="id_nome" name="valor7a">
                            </div>
                          
                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </form>
                    </fieldset>
                </div>
                <br> 
                <div class="container">
                <?php 
                
                $valor07 =isset($_POST['valor7']) ? $_POST ['valor7'] : 0;
                $valor07a =isset($_POST['valor7a']) ? $_POST ['valor7a'] : 0;
                if ($valor07 > $valor07a){ 
                    echo ".$valor07 é maior que $valor07a";}
                elseif ($valor07 == $valor07a){
                    echo "Os números são iguais";}
                else {
                    echo "$valor07 é menor que $valor07a";
                }
                ?>
                  <!-- 8 -->
                  <div class="container ">
                    <fieldset>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" placeholder = "Questão 8" class="form-control" 
                                required id="id_nome" name="valor8">
                            </div>
                          
                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </form>
                    </fieldset>
                </div>
                <br> 
                <div class="container">
                <?php 
                $valor08 = isset($_POST['valor8']) ? $_POST ['valor8'] : 0;
                if ($valor08%4 >0)
                echo "Não Bissexto" ;
                else
                echo "Bissexto";
               ?>
         </div>
    </body>
    </html>