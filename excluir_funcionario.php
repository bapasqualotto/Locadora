<?php

include ("conexao.php");

$id=$_POST['id'];
$cnpj=$_POST['cnpj'];

$sqli = "DELETE FROM funcionario WHERE idFunc = ".$id." AND Locadora_CNPJ = ".$cnpj."";



 if( mysqli_query($conn, $sqli)){
  echo "Excluido com sucesso.";

 }

?>