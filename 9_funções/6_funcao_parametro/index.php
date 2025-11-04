<?php

function velocidadeMaxima($vel){
    
    if(is_int($vel)){
        echo "A velocidade máxima é: $vel km/h <br>";
    }else{
        echo " Por favor, passe um numero inteiro <br>";
    }
}


velocidadeMaxima(120);
velocidadeMaxima(80);
velocidadeMaxima(200);  

//nao pode chamar a funcao que necessita de parametro sem passar o parametro
//velocidadeMaxima();

echo "Teste continuando <hr>";

$velocidade = 300;
velocidadeMaxima($velocidade);

//ignora o segundo parametro
velocidadeMaxima(180, 'teste'); 

velocidadeMaxima('teste'); 

echo "Teste continuando <hr>";

//função com dois parametros
function descricaoAnimal($nome, $raca){
    echo "O $nome da raça $raca <br>";
}

descricaoAnimal('Rex', 'Pastor Alemão');
descricaoAnimal('Luna', 'Siamês');