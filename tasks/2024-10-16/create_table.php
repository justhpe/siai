<?php
    require_once "dane.php";
    $conn = new mysqli($host, $un, $pass, $db);

    if($conn->connect_error){
        die("General failure!");
    }

    $query = "CREATE TABLE koty (
    ID smallint NOT NULL auto_increment,
    rodzina varchar(32) NOT NULL,
    imie varchar(32) NOT NULL,
    wiek tinyint NOT NULL,
    PRIMARY KEY (ID)
    )";

    $result = $conn->query($query);
    if(!$result){
        die("No access to database!");
    }

    $result->close();
    $conn->close();
?>