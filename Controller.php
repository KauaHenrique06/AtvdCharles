<?php

require_once 'Model.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cod = $_POST['codigo'];
    $prod = $_POST['produto'];
    $val = $_POST['validade'];
    $preco = $_POST['preco'];

    Cadastrar::cadastra($cod, $prod, $val, $preco);

    echo "<script> alert('Produto cadastrado com sucesso!!') </script>";

    include 'ViewCadastro.php';
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $cod = $_GET['codigo'] ?? null;

    $consulta = null;
    $erro = null;

    if ($cod) {
        $resultado = Consultar::consulta($cod);

        if (!empty($resultado)) {
            $consulta = $resultado[0];
        } else {
            $erro = "Produto não encontrado.";
        }
    } else {
        $erro = "Código inválido.";
    }

    include 'ViewConsulta.php';
}

?>