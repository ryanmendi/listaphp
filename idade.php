<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nome = $_POST["nome"];
$idade = $_POST["idade"];

if ($idade >= 18) {
    echo "$nome é maior de idade e tem $idade anos.";
}
else {
    echo "$nome é menor de idade e tem $idade anos.";
}
}
?>
<html>
<head>
<title> Idade </title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
   <label for="nome">nome:</label> 
   <input type="text" id="nome" name="nome">
   <br>
   <label for="idade">idade:</label>
   <input type="number" id="idade" name="idade">
   <br>
   <input type="submit">
   </form>
</body>
</html>
