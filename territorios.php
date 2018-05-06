<?php
include_once("cabecalho.php");
include_once ("conecta.php");
include_once ("basededados_funcionario.php");
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>ID Terrritório</td>
        <td>Descrição</td>
        <td>ID Região</td>      
    </tr>
    <?php
    $territorios = listaTerritorios($conexao);
    foreach ($territorios as $territorio):
        ?>
        <tr>
            <td><?= $territorio["IDTerritorio"] ?></td>
            <td><?= $territorio["DescricaoTerritorio"] ?></td>
            <td><?= $territorio["IDRegiao"] ?> </td>
    <!--            <td><a class="btn btn-primary" href="produto-update-form.php?id=<?= $produto["id"] ?>">Alterar</a>
                <a class="btn btn-danger" href="produto-delete.php?id=<?= $produto["id"] ?>">Deletar</a>
            </td>-->

        </tr>
        <?php
    endforeach;
    ?>
</table>

