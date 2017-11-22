<?php
$servidor ='localhost';
$banco='locadora';
$usuario='root';
$senha=' ';

$conexao =mysql_connect($ervidor,$usuario,$senha);
if(!($conexao)) {
	echo "Não foi possivel estabelecer conexao com Mysql";
	exit;
}
$selecao = mysql_select_db($banco,$conexao);
if(!($selecao)){
	echo "Não foi possivel selecionar gerenciador Mysql";
	exit;
}

?>
