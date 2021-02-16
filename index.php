<link rel="stylesheet" href="style.css">

<?php $entries = [
    ['', 'x', ''],
    ['x', '', ''],
    ['', '', 'x']
];
 ?>

<div class="container">
<?php for ($row = 0; $row < 3; $row++): ?>
      <?php for($col = 0; $col < 3; $col++): ?>
    <a href="#"><?=$row . "/" . $col; ?></a>
    <?php endfor; ?>
<?php endfor; ?>
</div>

<pre><?=print_r($entries, true)
?></pre>