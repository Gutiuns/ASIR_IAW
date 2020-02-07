<?php 
    function meteSesion($POST){
        foreach ($POST as $i=>$c){
            if (is_array($c)){
                foreach($c as $indice=>$contenido){
                    $SESSION[$c[$indice]]=$c[$indice];
                }        
            }else{
                $SESSION[$i]=$c;   
            }           
        }
        return $SESSION;
    }
?>