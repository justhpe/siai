<?php
    require_once "dane.php";
    $conn = new mysqli($host, $un, $pass, $db);

    if($conn->connect_error){
        die("General failure!");
    }

    $query = 'INSERT INTO koty VALUES (NULL, "LEW", "Puszek", 4)';
    $res = $conn->query($query);

    if(!$res){
        die("Error");
    }
?>