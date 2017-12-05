<?php

session_start();

include "conexao.php";

$serie = $_POST['serie'];

$result = mysqli_query($conn, "SELECT c.nome FROM cliente as c INNER JOIN aluguel as a INNER JOIN serie as s INNER JOIN dvd_serie as d ON c.idCliente = a.Cliente_idCLiente WHERE a.id_dvd = d.id_dvd AND d.cod_serie = s.cod_serie AND s.nome = '$serie'");

if (empty($result)) 
{
    echo "Nenhum registro encontrado.";
}
while ($row = mysqli_fetch_assoc($result))
{
 echo "<br />";
 echo "Nome do Cliente:";
 echo $row['nome'];
 echo "<br />";
}
 
?>