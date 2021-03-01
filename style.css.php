<?php
if (array_key_exists("color", $_GET)){
    $color = $_GET['color'];
}
else {
    $color = 'red';
}


if (array_key_exists("bg", $_GET)){
    $bg = $_GET['bg'];
}
else {
    $bg = 'grey';
}

$size = array_key_exists("size", $_GET) ? $_GET ['size']: 20

?> 

h2 {
    color: <?= $color?>;
    font-size: <?= $size?>;
    background: <?= $bg?>;
}

button {
    margin-top: 10px;
    border: 1px solid <?=$bg?>;
    border-radius: 10px;

}