<html>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="numero">Digite o número de 1 a 50 e tente acertar</label>
    <br>
    <input type="number" id="num" name="num">
    <input type="submit">
    </form>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$numaleat = rand (1,50); // rand = aleatorio
$num = $_POST["num"];

if ($num < $numaleat) {
    echo "tente um numero maior.";
}
elseif ($num > $numaleat) {
    echo "tente um numero menor.";
}
else {
    echo "Parabens você acertou !";
}
}
?>