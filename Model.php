<?php
class Cadastrar
{
    public static function cadastra($cod, $prod, $val, $preco)
    {
        try {

            $conecta = new PDO("mysql:host=127.0.0.1;port=3306;dbname=empresa", "root", "070506");

            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $cadastra = "INSERT INTO produtos (codigo, produto, data_validade, preco) VALUES ('" . $cod . "', '" . $prod . "', '" . $val . "', '" . $preco . "') ";

            $conecta->exec($cadastra);

        } catch (PDOException $erro) {
            echo "Erro de conexão" . $erro->getMessage();
        }
    }
}

class Consultar
{
    public static function consulta($cod)
    {
        try {

            $conecta = new PDO("mysql:host=127.0.0.1;port=3306;dbname=empresa", "root", "070506");

            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $consulta = "SELECT * FROM produtos WHERE codigo=?";

            $stmt = $conecta->prepare($consulta);
            $stmt->execute([$cod]);

            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $resultados;

        } catch (PDOException $erro) {
            echo "Erro de conexão" . $erro->getMessage();
        }
    }
}

?>