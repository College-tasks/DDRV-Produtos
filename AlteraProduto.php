<?php
$cod = $_POST['cod'];
require("conecta.inc");
$cont = new Produto_Controller();
$produto = $cont->selectById($cod);
print("<h3>Alterando os dados do Produto:</h3><p>");
?>
<form action="Confirma_AlterarProduto.php" method="post">
    Código: <?php print($Id) ?>
    <input type="hidden" name="id" value="<?php print($Id) ?>">
    <br>Nome: <input type="text" name="nome_alter" value="<?php print($produto->getNome()) ?>">
    <br>Preco: <input type="text" name="preco_alter" value="<?php print($produto->getPreco()) ?>">
    <br>Descricao: <input type="text" name="descricao_alter" value="<?php print($produto->getDescricao()) ?>">
    <br>Categoria: <select name="categoria_alter">
        <option value="<?php print("$loja->getIdCategoria()"); ?>" selected><?php print("$loja->getCategoria()"); ?></option>
        <?php
        $catCont = new Categoria_Produto_Controller();
		$categorias = $catCont->listarCategoria();//Tirar da lista a categoria já selecionada

        foreach ($categorias as $item) {
            print("<option value='$item->getId()'>$item->getCategoria()</option>");
        }
        ?>
    </select>
    <p><input type="submit" value="Alterar Dados">
</form>
<p><a href="CadastrarProduto.php">Cancelar e voltar</a>