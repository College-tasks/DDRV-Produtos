<center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <form action="Login.php" method="get">

        <br>email: <input type="text" name="email"/>                  
        <br>Senha: <input type="password" name="senha"/>
        <input type="submit"/>
    </form>
    
    <?php
    
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    
    $userCont = new Usuario_Controller();
    $ok = $userCont->logar($email, $senha);
    // function logar($usuario, $senha) {}
    
    if ($ok) {
        $user = $userCont->logar($email);
        session_start();
        $_SESSION['user'] = $user;
        
        
        redirect('BoasVindasUser.php');
        // 
    }
    
    ?>