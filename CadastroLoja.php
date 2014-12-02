

<?php
if (sizeof($_POST) != 0) {

    require 'controller/Loja_Controller.php';
    include 'model/Loja.php';

    $uc = new Loja_Controller();
    $user = new Loja();

    $user->setRazaoSocial($_POST['razaoSocial']);
    $user->setEmail($_POST['email']);
    $user->setEndereco($_POST['endereco']);
    $user->setTelefone($_POST['telefone']);
    $user->setSenha($_POST['senha']);
    $user->setIdCategoria($_POST['id_categoria']);
 
    $uc->inserir($user);
}
else
{
?>    
<center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form action="CadastroLoja.php" method="post">
        <table border='1' align=‘center'>
            <tr><td align='center'>

                    Razão Social: <input type="text" name="razaoSocial">
                    <br>Endereço: <input type="text" name="endereco">
                    <br>E-mail: <input type="text" name="email">
                    <br>Telefone: <input type="text" name="telefone">
                     <br>Senha: <input type="password" name="senha">
                    <br>Categoria: <select name="id_categoria" required>                     
                        <?php
                        include 'controller/Categoria_Loja_Controller.php';
                        include 'model/Categoria_Loja.php';

                        $catCont = New Categoria_Loja_Controller();
                        $categorias = $catCont->listarCategoria();

                        foreach ($categorias as $item) {
                            echo "<option value=" . $item->getId() . ">" . $item->getCategoria() . "</option>";
                        }
                        ?>
                    </select>
                    <br><br><input type="submit" value="Inserir Empresa">
                    <input type="reset" value="Reset" />
                </td></tr>
        </table>
    </form>
    <p><a href="Cadastro_loja.php">Voltar</a>
</center> 
<?php
}
?>