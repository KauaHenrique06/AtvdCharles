<?php

require_once 'Model.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cod = $_POST['codigo'];
    $prod = $_POST['produto'];
    $val = $_POST['validade'];
    $preco = $_POST['preco'];

    $cadastro = Cadastrar::cadastra($cod, $prod, $val, $preco);

    echo "<script> alert('Produto cadastrado com sucesso!!') </script>";

    include 'ViewCadastro.php';
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $cod = $_GET['codigo'];

    $consulta = Consultar::consulta($cod);

    include 'ViewConsulta.php';

}

?>