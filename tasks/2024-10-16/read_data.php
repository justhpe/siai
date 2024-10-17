<?php
    require_once "dane.php";
    $conn = new mysqli($host, $un, $pass, $db);

    if($conn->connect_error){
        die("General failure!");
    }

    $query = "SELECT * FROM koty";
    $result = $conn->query($query);

    $rows = $result->num_rows;
    echo "<table><tr><th>id</th><th>rodzina</th><th>Imie</th><th>Wiek</th></tr>";
    for($i=0; $i < $rows; $i++){
        $row = $result->fetch_array(MYSQLI_NUM);
        echo "<tr>";
        for($j=0; $j < 2; $j++){
            echo "<td>" . htmlspecialchars($row[$j]);
        }
    }
    echo "</table>";
?>