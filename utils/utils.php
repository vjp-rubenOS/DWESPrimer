<?php
function esOpcionMenuActiva(string $opcionMenu): bool{
    if($_SERVER['REQUEST_URI']===$opcionMenu){
        return true;
    }else{
        return false;
    }
}


?>
