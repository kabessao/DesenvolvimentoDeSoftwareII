<?php

require "autoload.php";

$con=Conexao::open();
$enquete=new Registro("usuarios",$con);
$enquete->codigo=$_POST["codigo"]; 
$enquete->nome=$_POST["nome"]; 
$enquete->email=$_POST["email"]; 

$erro = new Template("template.html");
$erro->set("titulo","Erro");
$erro->set("rodape","Cadastro");	

if ($_POST["senha"] != $_POST["senha2"] ) {
	$erro->set("conteudo", new Msg("As senhas não estão iguais"));
	echo $erro->show();
	header("Refresh: 3; URL=index.php");
} else $enquete->senha=sha1($_POST["senha"]); 
	
if ($enquete->save()){
	$pagina = new Template("template.html");
	$pagina->set("titulo","Gravando usuario");
	$pagina->set("conteudo", new Msg("Cadastro com sucesso!"));
	$pagina->set("rodape","Cadastro");	
	echo $pagina->show();
	header("Refresh: 3; URL=index.php");
}
