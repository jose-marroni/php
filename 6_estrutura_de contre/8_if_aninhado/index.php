<?php

if(10 > 2){
    echo "Entrou no primeiro if <br>";
    
    if("test" == "test"){
        "Entrou no segundo if <br>";
    }
}

if(10 > 2){
    echo "Entrou no primeiro if 2 <br>";
    
    if("test" != "test"){
        "Entrou no segundo if 2 <br>";
    
    }else{
        echo "Entrou no else 2 <br>";
    }
}



if(10 < 2){
    echo "Entrou no primeiro if 2 <br>";
    
    if("test" != "test"){
        "Entrou no segundo if 2 <br>";
    
    }else{
        echo "Entrou no else 2 <br>";
    }
}else{
    echo "Entrou no primeiro else<br>";
}