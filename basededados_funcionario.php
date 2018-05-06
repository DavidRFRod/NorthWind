<?php

function listaFuncionarios($conexao) {
    $funcionarios = array();
    $resultado = mysqli_query($conexao, "select * from funcionarios");
    while ($funcionario = mysqli_fetch_assoc($resultado)) {
        array_push($funcionarios, $funcionario);
    }
    return $funcionarios;
}

function listaTerritorios($conexao) {
    $territorios = array();
    $resultado = mysqli_query($conexao, "select * from territorios");
    while ($territorio = mysqli_fetch_assoc($resultado)) {
        array_push($territorios, $territorio);
    }
    return $territorios;
}
function listaRegioes($conexao) {
    $regioes= array();
    $resultado = mysqli_query($conexao, "select * from regiao");
    while ($regiao = mysqli_fetch_assoc($resultado)) {
        array_push($regioes, $regiao);
    }
    return $regioes;
}
function listaTerritorio_Funcionario($conexao) {
    $terri_funs= array();
    $resultado = mysqli_query($conexao, "select * from funcionarios_territorios");
    while ($terri_fun = mysqli_fetch_assoc($resultado)) {
        array_push($terri_funs, $terri_fun);
    }
    return $terri_funs;
}

//function listaCategorias($conexao) {
//    $categorias = array();
//    $resultado = mysqli_query($conexao, "select * from categorias");
//    while ($categoria = mysqli_fetch_assoc($resultado)) {
//        array_push($categorias, $categoria);
////        $categorias[] = $categoria;
//    }
//    return $categorias;
//}
//function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id) {
//    $query = "update produtos set nome = '{$nome}',preco = '{$preco}',descricao = '{$descricao}',categoria_id ='{$categoria_id}' where id = '{$id}'";
//    return mysqli_query($conexao, $query);
//}
//function buscaProduto($conexao, $id) {
//    $query = "select * from produtos where id ={$id}";
//    $resultado = mysqli_query($conexao, $query);
//}
function insereFuncionario($conexao,$IDFuncionario,$Nome,$Sobrenome,$Titulo,$TituloCortesia,$DataNac,$DataAdmissao,$Endereco,
        $Cidade,$Regiao,$Cep,$Pais,$Extensao,$Notas,$Reportase,$FotoCaminho) {
    $query = "insert into funcionarios (IDFuncionario,Nome,Sobrenome,Titulo,TituloCortesia,DataNac,DataAdmissao,Endereco,
            Cidade,Regiao,Cep,Pais,Extensao,Notas,Reportase,FotoCaminho) values  ($conexao,$IDFuncionario,'$Nome','$Sobrenome','$Titulo','$TituloCortesia','$DataNac','$DataAdmissao','$Endereco',
        '$Cidade','$Regiao','$Cep','$Pais','$Extensao','$Notas','$Reportase','$FotoCaminho')";
    return mysqli_query($conexao, sprintf ,$query);
}
//function insereCategoria($conexao, $nome) {
//    $query = "insert into categorias (nome) values ('$nome')";
//    return mysqli_query($conexao, $query);
//}
