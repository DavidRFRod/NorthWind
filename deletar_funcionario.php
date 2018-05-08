<?php
include_once ("conecta.php");
function printaMensagemERedirecionaPagina($mensagem){
    echo "<script>alert('$mensagem'); window.location='funcionarios.php'</script>";
}
$IDFuncionario = $_GET['IDFuncionario'];
$deleta = mysqli_query($conexao, "DELETE FROM funcionarios WHERE IDFuncionario = $IDFuncionario");
$deleta == "" ? printaMensagemERedirecionaPagina("Houve um erro ao deletar!") :
                printaMensagemERedirecionaPagina("Registro excluído com sucesso!");
?>