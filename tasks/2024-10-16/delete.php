<?php
    require_once "dane.php";
    $conn = new mysqli($host, $un, $pass, $db);

    if($conn->connect_error){
        die("Could not connect to db!");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete data</title>
        
    </head>
    <body>
        <form action="" method="post">
            <label for="id">Wybierz rekord z tabeli: </label>
            <select name="id" id="id">
                <?php 
                    $query = "SELECT id, rodzina, imie, wiek FROM koty";
                    $result = $conn->query($query);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value=\"$row[id]\">$row[id] - $row[rodzina] - $row[imie] - $row[wiek] (lat)</option>";
                        }
                    }
                ?>
            </select>
            <input type="submit" value="Delete">
        </form>
    </body>
</html>

<?php
    if($_POST){
        $id = $_POST['id'];

        $query = "DELETE FROM koty WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
    }
?>