<?php

    function conetar(){
        $link=new mysqli("localhost","root","","itscoqr");
        return $link;
    }

    $mysli=conetar();

?>