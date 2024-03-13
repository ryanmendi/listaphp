<html>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<label for="nota">Digite uma nota de 0 a 10.</label>
<input type="number" id="nota" name="nota">
</form>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nota = $_POST["nota"];

if ($nota > 10) {
    echo "nota inválida";
}
elseif ($nota < 1 ) {
    echo "nota invalida";
}
else {
    echo "nota valida";
}
}
?>