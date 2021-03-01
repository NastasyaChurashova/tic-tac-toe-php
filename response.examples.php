<?php 

/*
if (
    array_key_exists('a', $_GET) &&
    array_key_exists('b', $_GET) &&
    array_key_exists('operator', $_GET) &&
    is_numeric($_GET['a']) && is_numeric($_GET['b']) && array_key_exists($operator,  $operator_list)){

    $a = $_GET['a'];
    $b = $_GET['b'];
    $operator = $_GET['operator'];
    $operator_list = ['+' => null, '-' => null, '*' => null, '/' => null, '**' => null];
    
    switch ($operator) {
            case "+":
                $output =  $_GET['a'] + $_GET['b'];
                break;
            case "-":
                $output =  $a - $b;
                break;
            case "*":
                $output =  $a * $b;
                break;
            case "/":
                $output =  $a / $b;
                break;
            case "**":
                $output =  $a ** $b;
                break;
            default:
                $output = "unsupported operator";
                  }
            echo $output;
    }
*/

$result = '';

if (
    array_key_exists("a", $_GET) &&
    array_key_exists("b", $_GET) &&
    is_numeric($_GET['a']) &&
    is_numeric($_GET['b'])
) {
    $result = $_GET['a'] + $_GET['b'];
}


if (
    array_key_exists("a", $_POST) &&
    array_key_exists("b", $_POST) &&
    is_numeric($_POST['a']) &&
    is_numeric($_POST['b'])
) {
    $result = $_POST['a'] . $_POST['b'];
}


if (
    array_key_exists("next", $_POST)){
    header('location: ' . $_POST['next'] . "?result=" . $result);
}

if (array_key_exists("result", $_POST) &&
isset($result)){
    echo('location: ' . $_POST['next'] . "?result=" . $result);
}

?>

<h2><?=$result;?></h2>
<pre>
<?php
echo "GET: ". print_r($_GET, true) ;
echo "POST: ". print_r($_POST, true) ;
echo "REQUEST: ". print_r($_REQUEST, true) ;
?>
</pre>