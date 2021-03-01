<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

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
/* task #9
$i=1;
for ($r = 2; $r >= 0; $r--){
    for ($c = 2; $c >= 0; $c--){
        if ($c !=1){
           $entries[$r][$c] = $i++;  
    }
   
   }
 }
?>
*/

/* task #10
$i1 = 1;
$i2 = 0;

for ($r = 2; $r >= 0; $r--){
    for ($c = 2; $c >= 0; $c--){
        if ($c !=1){
            $a = $i1 + $i2;
            $i1=$i2;
            $i2=$a;
            $entries[$r][$c] = $a;  
            ;
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

*/


function isValueInt($value) {
    if ((int) $value) {
        return true;
    }
    return false;
}

$n = 0;
$m = 0;
$A['n'] = $n;
$A['m'] = $m;

$Quantity_Elements = count($A);

$A = [0, 2, 7, 5, 10];

function checkTwoNumbers ($Quantity_Elements, $A) {

    while (
        array_key_exists('n', $A) &&
        array_key_exists('m', $A) &&
        
        isset($n) && isset($m)  &&
        $n != $m &&
        isValueInt($n) && isValueInt($m)) {
 
    if  (($n - $m) === 5 && ($m -$n) == $Quantity_Elements && $n++ && $m++){
        echo $A['n'] . " - " . $A['m'];
        $n=$m+1;
        return true;
    }

    return false;
    }
}
?>

