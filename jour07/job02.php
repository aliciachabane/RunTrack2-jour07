<?php

function bonjour($jour){

if($jour==true){
    return "bonjour";
}

if($jour==false){
    return "bonsoir";
}

}

echo bonjour(true);  
echo bonjour(false); 


?>
