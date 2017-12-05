<?php

session_start();

include "conexao.php";

$nome = $_POST['nome'];

$result = mysqli_query($conn, "SELECT l.nome,l.end,l.telefone FROM locadora as l INNER JOIN rede as r ON l.Rede_nome = r.Nome WHERE r.Dono = '$nome'");
if (empty($result)) 
{
    echo "Nenhum registro encontrado.";
}
while ($row = mysqli_fetch_assoc($result))
{
 echo "<br />";
 echo "Nome da Locadora:";
 echo $row['nome'];
 echo "<br />";
 echo "Endeço:";
 echo $row['end'];
 echo "<br />";
 echo "Telefone:";
 echo $row['telefone'];
 echo "<br />";

}
 
?>