<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Padaria-Cadastro</title>
</head>

<body>
    <h1>Cadastro de Produtos - Padaria</h1>
    <form action="cadastrar.php" method="POST">
        <label>Nome do produto:</label>
        <input type="text" name="nome" required>
        <br><br>
        <label>Categoria:</label>
        <input type="text" name="categoria" required>
        <br><br>
        <label>Preço:</label>
        <input type="number" name="preco" step="0.01" required>
        <br><br>
        <label>Quantidade:</label>
        <input type="number" name="quantidade" required>
        <br><br>
        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar Formulário</button>
    </form>

</body>

</html>

