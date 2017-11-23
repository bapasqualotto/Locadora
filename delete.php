<?php

include ("conexao.php");

$nome=$_POST['nome'];

$sql = "DELETE FROM cliente WHERE nome ='$nome'";

if( mysqli_query($conn, $sql)){
  echo "Excluido com sucesso.";
}

?>