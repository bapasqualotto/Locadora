<?php

session_start();

include "conexao.php";

$result = mysqli_query($conn, "SELECT * FROM desenho WHERE ".$_POST["desenho"]." = cod_desenho ");
while ($row = mysqli_fetch_assoc($result))
{
 echo $row['cod_desenho'];
 echo "<br />";
 echo $row['nome'];
 echo "<br />";
 echo $row['ano'];
 echo "<br />";
 echo $row['preco'];
 echo "<br />";
}

?>