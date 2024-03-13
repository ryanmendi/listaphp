<html>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="n1">Digite o primeiro numero para fazer o intervalo.</label>
    <br>
    <input type="number" id="n1" name="n1">
    <br>
    <label for="n2">Digite o segundo numero para fazer o intervalo.</label>
    <br>
    <input type="number" id="n2" name="n2">
    <br>
    <input type="submit">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["n1"];
    $numero2 = $_POST["n2"];

    for ($i = $numero1; $i <= $numero2; $i++) {
        echo $i . "\n";
    }
}
?>