<?php

require "autoload.php";


$form = new Element("form");
$form->action="gravausuario.php";
$form->method="post";
$form->name="f1";
$form->class="form-inline";

$lblNome = new Element("label");
$lblNome->add("Nome");

$txtNome = new Element("input");
$txtNome->type="text";
$txtNome->size="50";
$txtNome->name="nome";
$txtNome->class="form-control";

$lblEmail = new Element("label");
$lblEmail->add("Email");

$txtEmail = new Element("input");
$txtEmail->type="text";
$txtEmail->size="50";
$txtEmail->name="email";
$txtEmail->class="form-control";

$lblSenha = new Element("label");
$lblSenha->add("Senha");

$txtSenha = new Element("input");
$txtSenha->type="password";
$txtSenha->size="50";
$txtSenha->name="senha";
$txtSenha->class="form-control";

$lblSenha2 = new Element("label");
$lblSenha2->add("Senha2");

$txtSenha2 = new Element("input");
$txtSenha2->type="password";
$txtSenha2->size="50";
$txtSenha2->name="senha2";
$txtSenha2->class="form-control";



$form->add($lblNome);
$form->add($txtNome);
$form->add(new Element("br"));
$form->add($lblEmail);
$form->add($txtEmail);
$form->add(new Element("br"));
$form->add($lblSenha);
$form->add($txtSenha);
$form->add(new Element("br"));
$form->add($lblSenha2);
$form->add($txtSenha2);

$conteudo=$form->show();

$pagina = new Template("template.html");
$pagina->set("titulo", "Cadastro de usuário");
$pagina->set("conteudo", "$conteudo");
$pagina->set("rodape", "Cadastro de usuário");
echo $pagina->show();

?>

