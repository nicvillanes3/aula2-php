<?php
require("config.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $nomeProduto = $_POST["nomeProduto"];
    $categoria = $_POST["categoria"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    $sql = "INSERT INTO produtos (nomeProduto, categoria, preco, quantidade) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssdi", $nomeProduto, $categoria, $preco, $quantidade);
    $stmt->execute();

    header("Location: index.php");
}

?>

