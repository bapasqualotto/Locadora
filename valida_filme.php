<?php

session_start();

include "conexao.php";

$result = mysql_query("SELECT * FROM filme");
while ($row = mysql_fetch_array($result))
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