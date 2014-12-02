<?php
include('Sessao.php');
include 'model/Usuario.php';
include 'controller/Usuario_Controller.php';
$cont = new Usuario_Controller();
$usuario = $cont->selectById($_SESSION['user']);

//print_r($usuario);

print("<h3>Alterando os dados do Usuario:</h3><p>");
?>
<form action="ConfirmaAlterarUsuario.php" method="post">
    Código: <?php print($Id) ?>
    <input type="hidden" name="id" value="<?php print($Id) ?>">
    <br>Nome: <input type="text" name="nome_alter" value="<?php print($usuario->getNome()) ?>">
    <br>Nascimento: <input type="text" name="nascimento_alter" value="<?php print($usuario->getNascimento()) ?>">
    <br>Email: <input type="text" name="email_alter" value="<?php print($usuario->getEmail()) ?>">
    <br>Sexo: <select name="sexo_alter" value="<?php print($usuario->getSexo()) ?>">
    <br>Senha: <input type="password" name="senha_alter" value="<?php print($usuario->getSenha()) ?>">
       
    <p><input type="submit" value="Alterar Dados">
</form>
<p><a href="mostraf.php">Cancelar e voltar</a>
