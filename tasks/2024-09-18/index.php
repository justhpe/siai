<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kalkulator</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>PHP Calculator</h1>
        <hr>
        <form action="calc.php" method="post">
            <label>Number a: </label>
            <input type="text" name="a" id="a" placeholder="First number"><br><br>
            <label>action: </label>
            <select name="action" id="act" required>
                <option name="+">+</option>
                <option name="-">-</option>
                <option name="*">*</option>
                <option name="/">/</option>
                <option name="%">%</option>

            </select><br><br>
            <label>Number b: </label>
            <input type="text" name="b" id="b" placeholder="Second number"><br><br>
            <input type="submit" value="Calculate"><br>
            
            <?php
                if($_SERVER['REQUEST_METHOD'] === 'GET'){
                    
                    if(isset($_GET['res'])){
                        echo "<hr><h3>Results: </h3>";
                        $result = $_GET['res'];
                        echo $result;
                    }
                } 
                else {
                    echo "Press calculate first";
                }
            ?>

            <hr>
            <p>Just simple php calculator</p>
        </form>
    </body>
</html>