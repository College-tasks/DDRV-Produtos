<center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form action="CadastrarUsuario.php" method="post">
        <table border='1' align=‘center'>
            <tr><td align='center'>

                    Nome:<input type="text" name="nome" required /><br>
                    Email:<input type="text" name="email" required placeholder="exemple@exemple.com"/><br>
                    Senha:<input type="password" name="senha" required/><br>                
                    <br><br><input type="submit" value="Inserir Usuario">
                    <input type="reset" value="Reset" />
                </td></tr>
        </table>
    </form>
</center>
<?php
if (sizeof($_POST) != '') {

    require 'controller/Usuario_Controller.php';
    include 'model/Usuario.php';

    $uc = new Usuario_Controller();
    $user = new Usuario();

    $user->setNome($_POST['nome']);
    $user->setEmail($_POST['email']);   
    $user->setSenha($_POST['senha']);

    $uc->inserir($user);
}