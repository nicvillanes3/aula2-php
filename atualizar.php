<?php
require("config.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id = $_POST["id"];
    $nomeProduto = $_POST["nomeProduto"];
    $categoria = $_POST["categoria"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    $sql = "UPDATE padaria SET nomeProduto=?, categoria=?, preco=?, quantidade=? WHERE id=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssdii", $nomeProduto, $categoria, $preco, $quantidade, $id);
    $stmt->execute();

    header("Location: index.php");
}

?>