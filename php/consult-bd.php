php version 7
<?php


$table = "table";
$user = "user";
$pass = "pass";

$conecta = mysqli_connect("127.0.0.1", "root", "123456","t") or print (mysqli_error());
$sql = "SELECT * FROM users AS a WHERE a.nome = '" .$user. "' and a.senha = ".$pass." limit 1";
$result = mysqli_query($conecta, $sql) or print (mysqli_error());
$fetch = mysqli_num_rows($result);
print $fetch;

//prints 1 for ok and prints 0 for not ok
