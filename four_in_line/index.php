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
}

$entries = getEntries(); //забираем данные из json, $entries - variable containing array
$value = '';
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


$r = $_REQUEST['r'];
$c = $_REQUEST['c'];

if (array_key_exists($r, $table) && array_key_exists($c, $table[$r]) && array_key_exists('count', $entries) && $table[$r][$c] = 'o' || "x" && $r=9) {
    $table[$r][$c] ='';
  }
?>


<link rel="stylesheet" href="style.css">

<div class="container">
    <?php
    for ($r = 0; $r <= 9; $r++) {
        for ($c = 0; $c <= 9; $c++) {
            $value = (array_key_exists($r, $table) &&
                array_key_exists($c, $table[$r])) ? $table[$r][$c] : '';
            echo "<a href='?r=$r&c=$c'>$value</a>";
        }
    }
    ?>

</div>
<a href="?reset=Reset">RESET</a>