<?php
$con = mysql_connect("127.0.0.1:3307", "root", "123456");
if(!$con)
	die("Problema ao estabelecer conexão com o banco de dados: ". mysql_error());

$esquema = mysql_select_db("healthmap", $con);
if(!$esquema)
	die("Problema ao selecionar o esquema de dados: ". mysql_error());
?>