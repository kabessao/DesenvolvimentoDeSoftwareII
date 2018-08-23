<?php
require "classes/element.class.php";

$sugestao=new Element("Input");
$sugestao->type="text";
$sugestao->name="txtsugestao";
$sugestao->size="40";
$sugestao->maxlenght="100";
$sugestao->class="form-control";
$sugestao->show();

$form=new Element("form");
$form->action="grava.php";
$form->method="post";
$form->name="form1";
$form->add($sugestao);
$form->show();

    
echo"<form action=\"grava.php\" method=\"post\" name=\"form1\">

<input type=\"text\" autofocus name=\"txtsugestao\" size=\"40\" maxlength=\"100\" class=\"form-control\">
</form>
";

?>