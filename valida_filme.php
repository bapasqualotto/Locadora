<?php

session_start();

include "conexao.php";

$result = mysqli_query($conn, "SELECT * FROM filme WHERE ".$_POST["filme"]." = cod_filme ");
while ($row = mysqli_fetch_assoc($result))
{
 echo $row['cod_filme'];
 echo "<br />";
 echo $row['titulo'];
 echo "<br />";
 echo $row['ano'];
 echo "<br />";
 echo $row['genero'];
 echo "<br />";
 echo $row['preco_dia'];
 echo "<br />";
}

?>