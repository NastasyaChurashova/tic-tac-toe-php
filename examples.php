
<link rel="stylesheet" href="style.css">
<?php
$entries = [
    ['0', '0', '0'],
    ['0', '0', '0'],
    ['0', '0', '0']
];


/* #1 task
for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        $entries[$r][$c] = 'x';
    }
}

?>
*/

/* #2 task
for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($c !==0 ){
        $entries[$r][$c] = 'x';
        }
    }
}

?>
*/

/* #3 task
for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($r == 1 && $c == 1){
        $entries[$r][$c] = 'x';
        }
    }
}
?>
*/

/* #4 task
for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($r != 1){
        $entries[$r][$c] = 'x';
        }
    }
}
?>
*/
/* #5 task
for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        $entries[$r][$c] = 'x';
        if ($c !== 1 && $r == 2){
        break;
        }
    }
}
?>
*/
/* #6 task
for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        $entries[$r][$c] = 'x';
        if ($r == 1 || $r > 1){
            break;
        }
    }
}
?>
*/

/* #7 task
for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($r != 1 && $c != 1){
            $entries[$r][$c] = 'x';

        }
    }
}
?>
*/

/* #8 task
for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($c === 0){
            $entries[$r][$c] = 'x';
        }
        if ($r===1){
            $entries[$r][$c] = 'm';
        }
    }
}
?>
*/

/*almost 9
for ($r = 0; $r < 3; $r++){
     for ($c = 0; $c < 3; $c++){
         if ($c !=1 && $c==2) {
            $entries[$r][$c] = ($r+1)*2-1;  
                   
        }
        elseif ($c !=1 && $c==0){
            $entries[$r][$c] = ($r+1)*2;
        }

    }
  }
?>
*/
$i=1;
for ($r = 2; $r >= 0; $r--){
    for ($c = 2; $c >= 0; $c--){
        if ($c !=1){
           $entries[$r][$c] = $i++;  
    }
   
   }
 }
?>


<?php output($entries);?>
<pre><?=print_r($entries, true)?></pre>
<?php function output($entries) { ?>
    <table>
        <?php for($r= 0; $r < 3; $r++): ?>
            <tr>
            <?php for($c = 0; $c < 3; $c++): ?>
                <td><?=$entries[$r][$c] ; ?></td>
            <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
<?php } ?>