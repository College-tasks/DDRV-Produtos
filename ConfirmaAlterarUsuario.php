<?php
$codigo = $_GET['codigo_alter'];
$nome_alter = $_GET['nome_alter'];
$email_alter = $_GET['email_alter'];
$nascimento_alter = $_GET['nascimento_alter'];
$sexo_alter = $_GET['sexo_alter'];
$senha_alter = $_GET['senha_alter'];

$usuario= new Usuario();
$usuario->setId($codigo);
$usuario->setNome($nome_alter);
$usuario->setEmail($email_alter);
$usuario->setNascimento($nascimento_alter);
$usuario->setSexo($sexo_alter);
$usuario->setSenha($senha_alter);

$cont = Usuario_Controller();
$cont->atualizar($usuario);

echo 'Parabens vc atualizou o usuario';
?>
<input type="button" value="Voltar" onClick="alterarUsuario.php"> 
