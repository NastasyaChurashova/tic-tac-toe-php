<?php

file_put_contents('storage.txt', 'Hello World');


$default = [
    [0, 0, 0],
    [0, 0, 0],
    [0, 0, 0]
];

//Example 1

$entries = $default;
for ($c = 0; $c <= 2; $c++) {
    for ($r = 0; $r <= 2; $r++) {
        $entries[$c][$r] = 'x';
    }
}
$content = output($entries);

//Example 2
echo '2';
$entries = $default;

for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($c !==0 ){
        $entries[$r][$c] = 'x';
        }
    }
}
$content = $content . output($entries);

file_put_contents('storage.txt', $content);

//Example 3
echo '3';
$entries = $default;

for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        if ($r == 1 && $c == 1){
        $entries[$r][$c] = 'x';
        }
    }
}
$content = $content . output($entries);

file_put_contents('storage.txt', $content);

//Example 4
echo '4';
$entries = $default;

for ($c = 0; $c < 3; $c++) {
    for ($r = 0; $r < 3; $r++) {
        if ($c != 1){
        $entries[$r][$c] = 'x';
        }
    }
}
$content = $content . output($entries);
file_put_contents('storage.txt', $content);

//Example 5
echo '5';
$entries = $default;

for ($c = 0; $c < 3; $c++) {
    for ($r = 0; $r < 3; $r++) {
        $entries[$r][$c] = 'x';
        if ($r !== 1 && $c == 2){
        break;
        }
    }
}
$content = $content . output($entries);
file_put_contents('storage.txt', $content);

//Example 6
$entries = $default;
echo '6';
for ($r = 0; $r < 3; $r++) {
    for ($c = 0; $c < 3; $c++) {
        $entries[$r][$c] = 'x';
        if ($r == 1 || $r > 1){
            break;
        }
    }
}
$content = $content . output($entries);
file_put_contents('storage.txt', $content);


function output($ent, $title ='') {
    static $i = 0;
    $i++;
$out = PHP_EOL . "Example #$i" . PHP_EOL;

 for ($r = 0; $r <= 2; $r++) {
    $out = $out . "|";
    for ($c = 0; $c <= 2; $c++) {
        $out = $out . $ent[$r][$c] . "|" ;
     }
     $out = $out . PHP_EOL;
    }
    return $out;

}
?>