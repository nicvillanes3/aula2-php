<?php
include("config.php");
$result = $conexao->query("SELECT * FROM padaria ORDER BY id DESC");

echo "<table>";
echo "<tr><th>ID</th><th>Nome do Produto</th>Categoria<th></th><th>Preço</th><th>Quantidade</th><tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $produto['id'] . "</td>";
    echo "<td>" . $produto['nomeProduto'] . "</td>";
    echo "<td>" . $produto['categoria'] . "</td>";
    echo "<td>" . $produto['preco'] . "</td>";
    echo "<td>" . $produto['quantidade'] . "</td>";
    echo "<td>
        <a href='editar.php?id=".$produto['id']."'>Editar</a> |
        <a href='excluir.php?id=".$produto['id']."'>Excluir</a>
        </td>";
    echo "</tr>";
}
echo "</table>";
?>

