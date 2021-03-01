<link rel="stylesheet" href="style.css">

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php 
if (array_key_exists('r', $_REQUEST) && array_key_exists('c', $_REQUEST)) {
    echo "<h3>r=" . $_REQUEST['r'] . "; c= " . $_REQUEST['c'] . "</h3>";
}

$content = file_get_contents('tictactoe_db.json');
$entries = json_decode($content, true);




$i = 1;
?>
<div class="container">
    <?php for($r = 0; $r < 3; $r++): ?>
        <?php for($c = 0; $c < 3; $c++): ?>

<a href="?r=<?=$r?>&c=<?=$c?>"><?=$entries[$r][$c] ; ?></a>
        <?php endfor;?>
    <?php endfor;?>
</div>

<pre><?=print_r($entries, true)?></pre>