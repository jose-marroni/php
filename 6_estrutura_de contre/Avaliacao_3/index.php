<?php

function calcularDesconto($valor, $cate){
   
    if($cate === "eletrônicos"){
        
        $desc = ($valor * 0.10);
        
        return $valor - $desc;
     
    
    }else if($cate === "vestuário"){

        $desc = ($valor * 0.20);
        return $valor - $desc;
        

    }else if($cate === "alimentos"){

       $desc = ($valor * 0.05);
        return $valor - $desc;

    }else 

     return $valor;

}

calcularDesconto(100, "eletrônicos");
calcularDesconto(100, "vestuário");  
calcularDesconto(100, "alimentos");
calcularDesconto(100, "costrução");