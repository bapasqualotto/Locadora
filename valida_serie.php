<?php

session_start();

include "conexao.php";

$result = mysqli_query($conn, "SELECT * FROM serie WHERE ".$_POST["serie"]." = cod_serie ");
while ($row = mysqli_fetch_assoc($result))
{
 echo $row['cod_serie'];
 echo "<br />";
 echo $row['nome'];
 echo "<br />";
 echo $row['ano'];
 echo "<br />";
 echo $row['temporada'];
 echo "<br />";
 echo $row['genero'];
 echo "<br />";
  echo $row['preco'];
 echo "<br />";
}

?>