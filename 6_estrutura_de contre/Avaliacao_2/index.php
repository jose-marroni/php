<?php

function verificarAcesso($idade, $auto){

    if($idade >= 18 and $auto == true){
        
        return "Acesso autorizado.";
    
    }else if($idade < 18 and $auto == true){
        
        return "Acesso negado. Idade mínima requerida: 18 anos.";
    
    }else if($idade >= 18 and $auto != true){

        return "Acesso negado. Autorização necessaria.";

    }

}

verificarAcesso(19, true);
verificarAcesso(17, true);
verificarAcesso(18, true);