<?php
require("conexao.php");

$id = $_GET["id"];

$sql = "SELECT * FROM produtos WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();
$produto = $resultado->fetch_assoc();

if (!$produto) {
    echo "Produto não encontrado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>

    <h1>Editar Produto</h1>

     <form method="post" action="atualizar.php">
        <input type="hidden" name="id" value="<?= $produto['id']; ?>">
        Nome do Produto: <input type="text" name="nomeProduto" value="<?= $produto['nomeProduto']; ?>" required><br><br>
        Categoria: <input type="text" name="categoria" value="<?= $produto['categoria']; ?>" required><br><br>
        Preço: <input type="number" name="preco" step="0.01" value="<?= $produto['preco']; ?>" required><br><br>
        Quantidade: <input type="number" name="quantidade" value="<?= $produto['quantidade']; ?>" required><br><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>

