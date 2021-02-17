<link rel="stylesheet" href="style.css">

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php $entries = [
    ['', 'x', ''],
    ['x', '', ''],
    ['', '', 'x']
];
 ?>

<table>
<?php for ($row = 0; $row < 3; $row++): ?>
      <?php for($col = 0; $col < 3; $col++): ?>
    <a href="#"><?=$entries[$row][$col]; ?></a>
    <?php endfor; ?>
<?php endfor; ?>
      </table>

<pre><?=print_r($entries, true)
?></pre>