<center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <form action="Login.php" method="post">

        <br>E-mail: <input type="text" name="email"/>                  
        <br><br>Senha: <input type="password" name="senha"/>
        <br><br><input type="submit"/>
    </form>

    <?php
    
    if (sizeof($_POST) != '') {
        include 'controller/Loja_Controller.php';
        include 'model/Usuario.php';

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $userCont = new Loja_Controller();
        $ok = $userCont->logar($email, $senha);

        if ($ok) {
            session_start();
            $_SESSION['user'] = $email;
            header("location: CadastrarLoja.php");
        } else {
            header("location: http://www.google.com");
        }
    }
    ?>