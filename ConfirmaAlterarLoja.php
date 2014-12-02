<?php
$codigo = $_POST['codigo_alter'];
$razaosocial_alter = $_POST['rozaosocial_alter'];
$email_alter = $_POST['email_alter'];
$telefone_alter = $_POST['telefone_alter'];
$endereco_alter = $_POST['endereco_alter'];
$categoria_alter = $_POST['categoria_alter'];
$senha_alter = $_POST['senha_alter'];

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
?>
<input type="button" value="Voltar" onClick="alterarLoja.php"> 

