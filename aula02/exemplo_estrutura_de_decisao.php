<?php
/*
    Estrutura de decisão na programação temos algumas formas de desenvolver a estrutura de decisão:
        Tais como:
        -Estrura Simples
        -Estrura Composta
        -Estrura Encadeada
        -Estrura Compacta
        -Estrura Ternária
        -Decisão Múltipla
*/

#Estrutura simples pe dada por uma única ação

$idade = 18;

if($idade > 18){
    echo "Pode ir a festa";
}
echo "<br><hr><br>";
#Estrutura composta é dada por uma ou mais ações

$idade = 18;

if($idade >= 18){
    echo "Pode ir a festa";
} else{
    echo "não tem idade apropriada";
}
echo "<br><hr><br>";
#Estrutura Encadeada é dada muitas ações

$materia = "PHP com BD";

if($materia == "Java"){
    echo "Linguagem orientada a objetos";
} else if($materia == "Linguagem de Scripts"){
    echo "Linguagem web para aplicações";
}elseif($materia == "PHP com BD"){
    echo "Linguagem procedural web";
}else{
    echo "Não é uma materia de programação";}
echo "<br><hr><br>";

#Estrutura compacta é dada pela ausência das chaves    

$idade = 18;

if($idade >= 18)
    echo "Pode ir a festa <br><hr><br>";
 else
    echo "não tem idade apropriada <br><hr><br> ";


#Estrutura ternária é dada por definir a estrutura composta em 1 única linha    

$idade = 18;

echo($idade >= 18) ? "Pode ir a festa ":"não tem idade apropriada";

echo "<br><hr><br>";

#Decisão Múltipla: É dada a definir casos de teste

$opcao = 5;
switch($opcao){
    case 1:
        echo "A soma dos valores é: " (1+2);
        break;
    case 2:
        echo "A multiplicação dos valores é: " (1*2);
        break;
    case 3:
        echo "O módulo dos valores é: " (1%2);
        break;
    default:
        echo "opção Inválida";
        break;
}