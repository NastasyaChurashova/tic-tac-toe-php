<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php
$result = '';

if (array_key_exists('result', $_GET)) {
    $result = $_GET['result'];
}

if (array_key_exists('number', $_GET)) {
    $result = $result . $_GET['number'];
    header('location: ?result=' . $result);
}
//здесы мы получаем данные из файла json, но ещё ничего не занесли, важен ли порядок функций?
$phonebook = json_decode(file_get_contents('PhoneBook.json'), true);

if (array_key_exists('name', $_GET)) {
    $result = $_GET['name'];
    $з = array('name' => json_decode($phonebook, true));
    echo json_encode($phonebook);
}

if (!is_array($phonebook)) {
    $_GET['name'] = '';
    $phonebook = [$_GET['name']];
    file_put_contents('PhoneBook.json', json_encode($_GET['name'], JSON_PRETTY_PRINT));
}

if (array_key_exists('save', $_GET)) {
    $phonebook[] = $a;
    file_put_contents('PhoneBook.json', json_encode($a, JSON_PRETTY_PRINT));
    header('location: ?result=');
}

?>

<link rel="stylesheet" href="style.css">
<div class="container">

    <?php
    $i = 0;
    while ($i <= 9) : ?>
        <a href="?number=<?= $i ?>&result=<?= $result ?>"><?= $i++; ?></a>
    <?php endwhile; ?>
    <button><a href="?save&result=<?= $result ?>"><strong>Save</strong></a></button>
</div>
<br>

<?php
$a = '';
if (isset($_GET['First_name']) && isset($_GET['Last_name'])) {
    $First_name  = $_GET['First_name'];
    $Last_name = $_GET['Last_name'];
    $a = $First_name . " " . $Last_name;
    echo $a;
}
?>

<form action="" method="get">
    <span> Name </span><input type="text" name="First_name" placeholder="">
    <span> Surname </span><input type="text" name="Last_name" placeholder="">
    <button type="submit<?= $a ?>">submit</button>
</form>

<h2>Dial: <span id="output"><?= $result; ?></span></h2>
<?php


for ($i = 0; $i < count($phonebook); $i++) {
    echo "<p>" . $phonebook[$i] .  "</p>";
}


?>
<br>
<br>

<a href="?"><strong>Clear</strong></a>