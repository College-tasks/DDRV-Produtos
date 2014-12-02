<?php

require("conecta.php");
include('Sessao.php');
include 'model/Loja.php';
include 'controller/Loja_Controller.php';

$cont = new Loja_Controller();
$loja = $cont->selectById($_SESSION['user']);

print("<h3>Alterando os dados da Loja:</h3><p>");
?>
<form action="Confirma_AlterarLoja.php" method="post">
    Código: <?php print($Id) ?>
    <input type="hidden" name="id" value="<?php print($Id) ?>">
    <br>Razão Social: <input type="text" name="razao_alter" value="<?php print($loja->getRazaoSocial()) ?>">
    <br>Endereco: <input type="text" name="end_alter" value="<?php print($loja->getEndereco()) ?>">
    <br>Telefone: <input type="text" name="fone_alter" value="<?php print($loja->getTelefone()) ?>">
    <br>Email: <input type="text" name="email_alter" value="<?php print($loja->getEmail()) ?>">
    <br>Senha: <input type="password" name="senha_alter" value="<?php print($loja->getSenha()) ?>">
    <br>Categoria: <select name="categoria_alter">
        <option value="<?php print("$loja->getIdCategoria()"); ?>" selected><?php print("$loja->getCategoria()"); ?></option>
        <?php
        $catCont = new Categoria_Controller();
		$categorias = $catCont->listarCategoria();//Tirar da lista a categoria já selecionada

        foreach ($categorias as $item) {
            print("<option value='$item->getId()'>$item->getCategoria()</option>");
        }
        ?>
    </select>
    <p><input type="submit" value="Alterar Dados">
</form>
<p><a href="mostra.php">Cancelar e voltar</a>