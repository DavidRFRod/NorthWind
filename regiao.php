<?php
include_once("cabecalho.php");
include_once ("conecta.php");
include_once ("basededados_funcionario.php");
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>IDRegião</td>
        <td>Descrição</td>
             
    </tr>
    <?php
    $regioes = listaRegioes($conexao);
    foreach ($regioes as $regiao):
        ?>
        <tr>
            <td><?= $regiao["IDRegiao"] ?> </td>
            <td><?= $regiao["DescricaoRegiao"] ?></td>
    <!--            <td><a class="btn btn-primary" href="produto-update-form.php?id=<?= $produto["id"] ?>">Alterar</a>
                <a class="btn btn-danger" href="produto-delete.php?id=<?= $produto["id"] ?>">Deletar</a>
            </td>-->

        </tr>
        <?php
    endforeach;
    ?>
</table>