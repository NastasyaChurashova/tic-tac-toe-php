<link rel="stylesheet" href="style.css.php?color=gold&bg=grey">

<h2>#1 &lt;Link&gt;</h2>

<a href="response.examples.php?a=3&b=6">method Get</a>

<form action="response.examples.php" method="get">
    <input type="hidden" name="a" value="7">
    <input type="hidden" name="b" value="19">
    <button type="submit">#3 go </button>
</form>

<form action="response.examples.php" method="post">
    <input type="hidden" name="a" value="7">
    <input type="hidden" name="b" value="19">
    <button type="submit">#4 post concatenate </button>
</form>

<form action="response.examples.php?a=3&b=6" method="post">

    <button type="submit">#5 post calc </button>
</form>

<form action="response.examples.php?a=8&b=6" method="post">
<input type="hidden" name="next" value="request_examples.php">
    <button type="submit">#6 post calc with headers </button>
</form>



