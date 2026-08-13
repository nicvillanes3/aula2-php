<?php
require("config.php");
if ($_SERVER['REQUEST_METHOD'] === "GET") {
$id = $_GET['id'];

    $sql = "DELETE FROM padaria WHERE id=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: index.php");}
?>