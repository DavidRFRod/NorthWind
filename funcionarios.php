<?php
include_once("cabecalho.php");
include_once ("conecta.php");
include_once ("basededados_funcionario.php");
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>IDFuncionario </td>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Titulo</td>
        <td>Titulo Cortesia</td>
        <td>Data de Nascimento</td>
        <td>Data Admissão</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Região</td>
        <td>CEP</td>
        <td>País</td>
        <td>Extensão</td>
<!--        <td>Foto</td>-->
        <td>Notas</td>
        <td>Reportase</td>
        <td>Foto Caminho</td>        
    </tr>
    <?php
    $funcionarios = listaFuncionarios($conexao);
    foreach ($funcionarios as $funcionario):
        ?>
        <tr>
            <td><?= ($funcionario["IDFuncionario"]) ?></td>
            <td><?= ($funcionario["Nome"]) ?></td>
            <td><?= $funcionario["Sobrenome"] ?> </td>
            <td><?= $funcionario["Titulo"] ?> </td>
            <td><?= $funcionario["TituloCortesia"] ?> </td>
            <td><?= $funcionario["DataNac"] ?> </td>
            <td><?= $funcionario["DataAdmissao"] ?> </td>
            <td><?= $funcionario["Endereco"] ?> </td>
            <td><?= $funcionario["Cidade"] ?> </td>
            <td><?= $funcionario["Regiao"] ?> </td>
            <td><?= $funcionario["Cep"] ?> </td>
            <td><?= $funcionario["Pais"] ?> </td>
            <td><?= $funcionario["Extensao"] ?> </td>
            <!--<td><?= $funcionario["Foto"] ?> </td>-->
            <td><?= $funcionario["Notas"] ?> </td>
            <td><?= $funcionario["Reportase"] ?> </td>
            <td><?= $funcionario["FotoCaminho"] ?> </td>
            <td><a class="btn btn-primary" href="produto-update-form.php?id=<?= $produto["id"] ?>">Alterar</a>
                <a class="btn btn-danger" href="produto-delete.php?id=<?= $produto["id"] ?>">Deletar</a>
            </td>

        </tr>
        <?php
    endforeach;
    ?>
</table>
<?php

