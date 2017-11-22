<?php

include "conexao.php";

mysql_query("INSERT INTO cliente(id_cliente,nome,telefone,endereco) VALUES ('','$_POST[nome]','$_POST[telefone]','$_POST[endereco]')") or die ("Não enseriu");

echo "Dados inseridos no banco de dados.";

?>