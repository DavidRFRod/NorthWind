<?php include_once ("cabecalho.php"); ?>
<h1> Bem Vindo!!</h1>
<?php
include_once ("rodape.php");



echo "<hr/>";
include_once ("cp_input.php");
include_once ("cp_form.php");
$inputNome = new CpInput("Nome Completo");
$inputTelefone = new CpInput("Telefone");


$form = new CpForm("form_cadastro");
echo $form->render(
        array(
            0 => $inputNome,
            1 => $inputTelefone
        )
);
