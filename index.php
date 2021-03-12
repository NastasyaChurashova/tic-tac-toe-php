<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'functions.php';
?>
<br>


<link rel="stylesheet" href="style.css">

<?php

if (array_key_exists('reset', $_REQUEST)) {
    resetEntries();
    echo "RESET" . PHP_EOL;
}

//array_key_exists('reset', $_REQUEST) && (resetEntries() || print("RESET"));

$entries = getEntries(); //забираем данные из json

var_dump($entries);

$table = &getTable($entries);

if (array_key_exists('r', $_REQUEST) && array_key_exists('c', $_REQUEST)) {
    $r = $_REQUEST['r'];
    $c = $_REQUEST['c'];
    echo "<h3>r=" . $r . "; c= " . $c . "</h3>";
    if (
        !array_key_exists($r, $table) ||
        !array_key_exists($c, $table[$r]) ||
        $table[$r][$c] === ''
    ) {
        $entries['count'] = array_key_exists('count', $entries) ? $entries['count'] + 1 : 1;
        $table[$r][$c] = $entries['count'] % 2 === 0 ? 'o' : "x";
        saveEntries($entries);
    }
}

?>

<div class="container">
    <?php
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            $value = (array_key_exists($r, $table) &&
                array_key_exists($c, $table[$r])) ? $table[$r][$c] : '';
            echo "<a href='?r=$r&c=$c'>" . $value . "</a>";
        }
    }
    ?>
</div>

<a href="?reset=Reset">RESET</a><br>

<?php
                            //attempt #1 via [r][c]address
$a = '';
$win = '';
$entries['x'] = '';

if (
    array_key_exists('r', $_REQUEST) &&
    array_key_exists('c', $_REQUEST) &&
    array_key_exists('count', $entries) &&
    array_key_exists('x', $entries)

) {
    $r = $_REQUEST['r'];
    $c = $_REQUEST['c'];
    $a = $entries['count']; // количество элементов
    $x = $table[$r][$c]; // заполнение ячейки х или o

    if ($r == 0 && $c=2) {
        echo 'The Winner is'. PHP_EOL . $x; ?><br><?php   
    } else {
        echo 'no sides!  ';
    }
}

                            //attempt #2 via Switch

$x = ''; 
$win_combinations = ['012', '345', '678', '048', '246', '147', '036', '258'];

if (
    array_key_exists('r', $_REQUEST) &&
    array_key_exists('c', $_REQUEST) &&
    array_key_exists('x', $entries) &&
    array_key_exists($entries['x'],  $win_combinations) &&
    $entries['x']==3 //количество значений х или 0 равно 3м

) {
    $r = $_REQUEST['r'];
    $c = $_REQUEST['c'];
    $x = $table[$r][$c]; // заполнение
    $x= 'x' || 'o';

     switch ($win_combinations) {
        case "0":
            echo 'The Winner is' . $x;
            break;
        case "1":
            echo 'The Winner is' . $x;
            break;
        case "2":
            echo 'The Winner is' . $x;
        case "3":
            echo 'The Winner is' . $x;
        case "4":
            echo 'The Winner is' . $x;
        case "5":
            echo 'The Winner is' . $x;
        case "6":
            echo 'The Winner is' . $x;
        case "7":
            echo 'The Winner is' . $x;
        case "8":
            echo 'The Winner is' . $x;
    default:
            $output = "losers";
        }
}
else {
    $output = "values are invalid";
    }
var_dump($win_combinations);