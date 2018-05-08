<?php
include_once ("conecta.php");
include_once ("basededados_funcionario.php");
alteraFuncionario($conexao,$_GET["IDFuncionario"],$_GET["Nome"], $_GET["Sobrenome"],
        $_GET["Titulo"], $_GET["Título_de_Cortesia"], $_GET["Data_de_nascimento"],
        $_GET["Data_de_Admissão"], $_GET["Endereco"], $_GET["Cidade"], $_GET["Regiao"],
        $_GET["Cep"], $_GET["Pais"], $_GET["Extensao"],$_GET["Notas"],$_GET["Reportase"],
        $_GET["FotoCaminho"]);
header('Location: funcionarios.php');
?>
