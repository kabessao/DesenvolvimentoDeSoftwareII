<?php

require "autoload.php";

$con=Conexao::open();
$enquete=new Registro("games",$con);
$enquete->codigo="0";
$enquete->jogo=$_POST['txtjogo'];
$enquete->sugestao=$_POST['txtsugestao'];
$enquete->data=date("Y/m/d");

if ($enquete->save()) {
	$pagina = new Template("template.html");
	$pagina->set("titulo", "Obrigado");
	$pagina->set("conteudo", new Msg("Obrigado pela resposta!"));
	$pagina->set("rodape", "Enquete");
	echo $pagina->show();
	header("Refresh: 3; URL=index.php");

}

?>
