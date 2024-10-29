<?php
    if( isset($_POST['imie']) && isset($_POST['smaki'])){
        $imie = $_POST['imie'];
        $smaki = $_POST['smaki'];

        echo "Witaj " . $imie . ". Wybrane przez ciebie smaki to: ";

        foreach( $smaki as $value ){
            echo $value . " ";
        }
    
        echo ".";
    } 
?>

<br><hr><a href="smaki.html">Powrót</a>