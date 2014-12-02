<?php
$codigo = $_POST['codigo_alter'];
$nome_alter = $_POST['nome_alter'];
$preco_alter = $_POST['preco_alter'];
$descricao_alter = $_POST['descricao_alter'];
$categoria_alter = $_POST['categoria_alter'];


$produto= new Produto();
$produto->setId($codigo);
$produto->setNome($nome_alter);
$produto->setPreco($preco_alter);
$produto->setDescricao($descricao_alter);
$produto->setCategoria($categoria_alter);


$cont = Produto_Controller();
$cont->atualizar($produto);

echo 'Parabens vc atualizou';
?>
<input type="button" value="Voltar" onClick="alterarProduto.php"> 

