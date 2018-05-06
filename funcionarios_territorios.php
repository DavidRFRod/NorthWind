<?php
include_once("cabecalho.php");
include_once ("conecta.php");
include_once ("basededados_funcionario.php");
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>ID Funcionário</td>
        <td>ID Região</td>
             
    </tr>
    <?php
    $terri_funs = listaTerritorio_Funcionario($conexao);
    foreach ($terri_funs as $terri_fun):
        ?>
        <tr>
            <td><?= $terri_fun["IDFuncionario"] ?> </td>
            <td><?= $terri_fun["IDTerritorio"] ?></td>
    <!--            <td><a class="btn btn-primary" href="produto-update-form.php?id=<?= $produto["id"] ?>">Alterar</a>
                <a class="btn btn-danger" href="produto-delete.php?id=<?= $produto["id"] ?>">Deletar</a>
            </td>-->

        </tr>
        <?php
    endforeach;
    ?>
</table>
