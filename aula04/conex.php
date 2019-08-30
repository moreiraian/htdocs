<?php
    # Definição das variáveis (de ambiente) de conexão

    define("SERVER","localhost");
    define("USER","root");
    define("PASS");
    define("DB","db_curso");
    define("PORT",3306);

    function abreConex(
        //entregar(retornar) o contexto da conexão
        $link = mysqli_connect(SERVER, USER, PASS, DB, PORT)
        //set encode UTF-8
        mysqli_set_charset("utf-8");
        return $link
        )
    if(!abreConex()){
        echo "Erro ao estabelecer conexão com o banco de dados<br>"
        echo "Código do erro: " . mysqli_connect_error(); . "<br>"; //exibe codigo do erro
        echo "Mensagem de erro: " . myslqi_ connect_error();
        exit;
    }

    echo "Conexão estabelecido com sucesso. <br>";
    echo "Informação do servidor :" . myslqi_get_host_info($con);

    mysqli_close($con);