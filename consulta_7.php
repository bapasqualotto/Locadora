<?php

session_start();

include "conexao.php";

$cnpj = $_POST['cnpj'];

$result = mysqli_query($conn, "SELECT f.nome, f.sal FROM funcionario as f INNER JOIN locadora as l ON l.CNPJ = f.Locadora_CNPJ WHERE f.Locadora_CNPJ = '$cnpj' AND f.sal >= ALL (SELECT f2.sal FROM funcionario as f2)");

if (empty($result)) 
{
    echo "Nenhum registro encontrado.";
}
while ($row = mysqli_fetch_assoc($result))
{
 echo "<br />";
 echo "Nome do funcionario:";
 echo $row['nome'];
 echo "<br />";
 echo "Salario:";
 echo $row['sal'];
 echo "<br />";

}
 
?>