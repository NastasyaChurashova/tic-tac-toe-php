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
        
        if (@$table[$r+1][$c] !='' || $r==9){
            $value = $entries['count'] % 2 === 0 ? 'o' : "x";
            $table[$r][$c] = $value;
            saveEntries($entries);
        
            if (@$table[$r][$c+1]==$value && 
                @$table[$r][$c+2] ==$value && 
                @$table[$r][$c+3] ==$value){
                    echo  "The winner is" . PHP_EOL . $value;
            }
            if (@$table[$r][$c-1]==$value && 
                @$table[$r][$c-2] ==$value && 
                @$table[$r][$c-3] ==$value){
                echo  "The winner is" . PHP_EOL . $value;
            }
            if (@$table[$r][$c-1]==$value && 
                @$table[$r][$c+1] ==$value && 
                @$table[$r][$c+2] ==$value){
                echo  "The winner is" . PHP_EOL . $value;
            }
            if (@$table[$r][$c-2] ==$value &&
                @$table[$r][$c-1]==$value  &&
                @$table[$r][$c+1] ==$value ){
                echo  "The winner is" . PHP_EOL . $value;
            }//new 'if' for vertical
            if (@$table[$r+1][$c] ==$value &&
                @$table[$r+2][$c]==$value  &&
                @$table[$r+3][$c] ==$value){
                echo  "The winner is" . PHP_EOL . $value;
            }
            if (@$table[$r-1][$c] ==$value &&
                @$table[$r-2][$c]==$value  &&
                @$table[$r-3][$c] ==$value){
                echo  "The winner is" . PHP_EOL . $value;
            }
            if (@$table[$r-1][$c] ==$value &&
                @$table[$r+1][$c]==$value  &&
                @$table[$r+2][$c] ==$value){
                echo  "The winner is" . PHP_EOL . $value;
            }
            if (@$table[$r-2][$c] ==$value &&
                @$table[$r-1][$c]==$value  &&
                @$table[$r+1][$c] ==$value){
                echo  "The winner is" . PHP_EOL . $value;
            }
            //new 'īf' for diagonal
            if (@$table[$r+1][$c+1] ==$value &&
                @$table[$r+2][$c+2]==$value  &&
                @$table[$r+3][$c+3] ==$value){
                echo  "The winner is" . PHP_EOL . $value;
            }
            if (@$table[$r-1][$c-1] ==$value &&
                @$table[$r+1][$c+1]==$value  &&
                @$table[$r+2][$c+2] ==$value){
                echo  "The winner is" . PHP_EOL . $value;
            }
            if (@$table[$r-1][$c-1] ==$value &&
                @$table[$r-2][$c-2]==$value  &&
                @$table[$r-3][$c-3] ==$value){
                echo  "The winner is" . PHP_EOL . $value;
            }
            if (@$table[$r-2][$c-2] ==$value &&
                @$table[$r-1][$c-1]==$value  &&
                @$table[$r+1][$c+1] ==$value){
                echo  "The winner is" . PHP_EOL . $value;
            }
            if (@$table[$r+1][$c-1] ==$value &&
                @$table[$r+2][$c-2]==$value  &&
                @$table[$r+3][$c-3] ==$value){
                echo  "The winner is" . PHP_EOL . $value;
            }
        }
    }
}

/* attempt to optimize code

        for ($c=0; $c<=9; $c++){
            for ($r=9; $r>0; $r--){
                $win_combinations = [
                    [$r, $c, $r-1, $c, $r-2, $c, $r-3, $c],
                    [$r, $c, $r, $c+1, $r, $c+2, $r, $c+3]
                ];
                for ($i = 0; $i < count($win_combinations); $i++) {
                    $r1 = $win_combinations[$i][0];
                    $c1 = $win_combinations[$i][1];

                    if (getEntry($table, $r1, $c1) == $value
                        ){
                            echo  "The winner is" . PHP_EOL . $value;
                        }
                    }
            }
        } 
      
    }
}
*/
?>

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