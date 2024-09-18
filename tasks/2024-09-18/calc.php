<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $a = $_POST['a']; 
        //$aF = filter_input(INPUT_POST, $a, FILTER_SNITIZE_NUMBER_FLOAT);
        $b = $_POST['b'];
        $action = $_POST['action'];
        
        if(!empty($a) && !empty($b) && !empty($action)){
            switch( $action ){
                case '+':
                    $res = $a + $b;
                    break;
                case '-':
                    $res = $a - $b;
                    break;
                case '*':
                    $res = $a * $b;
                    break;
                case '/':
                    $res = $a / $b;
                    break;
                case '%':
                    $res = $a % $a;
                    if($res === 0){
                        $res = "brak reszty";
                    }
                    break;
                default:
                    $res = "Please select correct action";
            }
        }
        else {
            $res = "Not enough data";
        }

        if(!empty($res)){
            echo $res;
            header("Location: index.php?res=$res");
        }
        
    }
?>
<br>
<a href="index.php">Go back</a>