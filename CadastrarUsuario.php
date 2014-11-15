<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
        <form action="CadastrarUsuario.php" method="get">
            Nome:<input type="text" name="nome" required /><br>
            Email:<input type="text" name="email" required placeholder="exemple@exemple.com"/><br>
            Senha:<input type="password" name="senha" required/><br>
            Data Nascimento:<input type="text" name="nascimento" required placeholder="DD/MM/YYYY"/><br>
            Sexo:<input type="text" name="sexo" required/><br>
            <input type="submit" value="enviar" />
            <input type="reset" value="reset" />
        </form>
    </body>
</html>
<?php
if(sizeof($_GET)!=''){
    include './controller/Usuario_Controller.php';
    $uc = new Usuario_Controller();
    include './model/Usuario.php';
    $user = new Usuario();
    
    $user->setNome($_GET['nome']);
    $user->setEmail($_GET['email']);
    $user->setNascimento($_GET['nascimento']);
    $user->setSenha($_GET['senha']);
    $user->setSexo($_GET['sexo']);
    
    $uc->inserir($user);
}