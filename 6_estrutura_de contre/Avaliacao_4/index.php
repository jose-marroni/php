<?php

function verificarCategoria( $cate){
   
    if($cate === "eletrônicos"){
        
        return  "Essa categoria é de produtos eletrônicos";
    
    }else if($cate === "vestuário"){
    
        return "Essa categoria é de produtos de vestuário" ;

    }else if($cate === "alimentos"){
      
        return "Essa categoria é de produtos alimentícios";

    }else 

     return "Categoria desconhecida";

}

verificarCategoria( "eletrônicos");
verificarCategoria( "vestuário");  
verificarCategoria( "alimentos");
verificarCategoria( "costrução");