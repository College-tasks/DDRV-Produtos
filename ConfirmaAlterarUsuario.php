<?php
$codigo = $_POST['codigo_alter'];
$nome_alter = $_POST['nome_alter'];
$email_alter = $_POST['email_alter'];
$nascimento_alter = $_POST['nascimento_alter'];
$sexo_alter = $_POST['sexo_alter'];
$senha_alter = $_POST['senha_alter'];

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
