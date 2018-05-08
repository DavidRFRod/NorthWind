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
    $regioes = array();
    $resultado = mysqli_query($conexao, "select * from regiao");
    while ($regiao = mysqli_fetch_assoc($resultado)) {
        array_push($regioes, $regiao);
    }
    return $regioes;
}

function listaTerritorio_Funcionario($conexao) {
    $terri_funs = array();
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
function alteraFuncionario($conexao,$IDFuncionario, $Nome, $Sobrenome, $Titulo, $TituloCortesia, $DataNac, $DataAdmissao, $Endereco, $Cidade, $Regiao, $Cep, $Pais, $Extensao, $Notas, $Reportase, $FotoCaminho) {
    $query = "update funcionarios set Nome = '$Nome',Sobrenome = '$Sobrenome',Titulo = '$Titulo',TituloCortesia ='$TituloCortesia',DataNac='$DataNac',DataAdmissao='$DataAdmissao',Endereco ='$Endereco',"
            . " Cidade='$Cidade',Regiao ='$Regiao',Cep='$Cep',Pais='$Pais',Extensao='$Extensao',Notas='$Notas',Reportase='$Reportase',FotoCaminho='$FotoCaminho' where IDFuncionario = '$IDFuncionario'";
    
    return mysqli_query($conexao, $query);
}

function listaAlterar($conexao, $IDFuncionario) {
    $sql = "select * from funcionarios where IDFuncionario = $IDFuncionario";
    $query = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_array($query);
    return $resultado;
}
function insereFuncionario($conexao, $Nome, $Sobrenome, $Titulo, $TituloCortesia, $DataNac, $DataAdmissao, $Endereco, $Cidade, $Regiao, $Cep, $Pais, $Extensao, $Notas, $Reportase, $FotoCaminho) {
    $sqlMaxIdFuncionario = "SELECT max(IDFuncionario) + 1 FROM funcionarios";
    $queryMaxIdFuncionario = mysqli_query($conexao, $sqlMaxIdFuncionario);
    $arrayMaxIdFuncionario = mysqli_fetch_array($queryMaxIdFuncionario);
    $IDFuncionario = $arrayMaxIdFuncionario[0];
    $Reportase = !empty($Reportase) ? $Reportase : "null";
    $query = "insert into funcionarios (IDFuncionario,Nome,Sobrenome,Titulo,TituloCortesia,DataNac,DataAdmissao,Endereco,"
            . "Cidade,Regiao,Cep,Pais,Extensao,Notas,Reportase,FotoCaminho) values  ($IDFuncionario,'$Nome','$Sobrenome','$Titulo','$TituloCortesia','$DataNac','$DataAdmissao','$Endereco',"
            . "'$Cidade','$Regiao','$Cep','$Pais','$Extensao','$Notas',$Reportase,'$FotoCaminho')";
    return mysqli_query($conexao, $query);
}

//function insereCategoria($conexao, $nome) {
//    $query = "insert into categorias (nome) values ('$nome')";
//    return mysqli_query($conexao, $query);
//}
