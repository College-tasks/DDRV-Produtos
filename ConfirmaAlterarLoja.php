<?php
$codigo = $_GET['codigo_alter'];
$razaosocial_alter = $_GET['rozaosocial_alter'];
$email_alter = $_GET['email_alter'];
$telefone_alter = $_GET['telefone_alter'];
$endereco_alter = $_GET['endereco_alter'];
$categoria_alter = $_GET['categoria_alter'];
$senha_alter = $_GET['senha_alter'];

$loja= new Loja();
$loja->setId($codigo);
$loja->setRazaoSocial($razaosocial_alter);
$loja->setEmail($email_alter);
$loja->setTelefone($telefone_alter);
$loja->setEndereco($endereco_alter);
$loja->setCategoria($categoria_alter);
$loja->setSenha($senha_alter);

$cont = Loja_Controller();
$cont->atualizar($loja);

echo 'Parabens vc atualizou';
//fazer botao voltar
?>
