
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
                                <label for="id_nome"> Valor </label>
                                <input type="number" class="form-control" 
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
         </div>
    </body>
    </html>