<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<link rel="stylesheet" href="style.css">

<?php


$content = file_get_contents('tictactoe_db.json');
$entries = json_decode($content, true);
if (!is_array($entries)) {
    $entries = [];
}
$entries['table'] = array_key_exists('table', $entries) ? $entries['table'] : [];

$table = &$entries['table'];

if (array_key_exists('r', $_REQUEST) && array_key_exists('c', $_REQUEST)) {
    echo "<h3>r=" . $_REQUEST['r'] . "; c= " . $_REQUEST['c'] . "</h3>";

    if (!array_key_exists('count', $entries)) {
        $entries['count'] = 1;
    } else {
        $entries['count']++;
    }

$value = $entries['count'] %2 ===0 ? '0' : "x";

    /*
    if ($entries['count'] % 2 === 0) {
        $value = 'o';
    }
    else {
        $value = 'x';
    }
*/

$table[ $_REQUEST['r']][ $_REQUEST['c']] = $value;

 file_put_contents('tictactoe_db.json', json_encode($entries, JSON_PRETTY_PRINT));
}

?>

<div class="container">
    <?php for ($r = 0; $r < 3; $r++) : ?>
        <?php for ($c = 0; $c < 3; $c++) : ?>
            <a href="?r=<?= $r ?>&c=<?= $c ?>"><?= $table[$r][$c]; ?></a>
        <?php endfor; ?>
    <?php endfor; ?>
</div>