<center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <form action="CadastrarProduto.php" method="post">        

        Nome:<input type="text" name="nome" required /><br>
        Preço:<input type="text" name="preco" required /><br>
        Descrição:<input type="text" name="descricao" required/><br>
        Categoria: <select name="id_categoria" required>
            <?php
            include 'controller/Categoria_Produto_Controller.php';
            include 'model/Categoria_Produto.php';

            $catCont = New Categoria_Produto_Controller();
            $categorias = $catCont->listarCategoria();
            
            foreach ($categorias as $item) {
                echo "<option value=" . $item->getId() . ">" . $item->getCategoria() . "</option>";
            }
            ?>
        </select>
        <br><br><input type="submit" value="Inserir Produto">
        <input type="reset" value="Reset" />
    </form>
</center>
<?php
if (sizeof($_POST) != 0) {

    require 'controller/Produto_Controller.php';
    include 'model/Produto.php';

    $uc = new Produto_Controller();
    $user = new Produto();

    $user->setNome($_POST['nome']);
    $user->setPreco($_POST['preco']);
    $user->setDescricao($_POST['descricao']);
    $user->setIdCategoria($_POST['id_categoria']);
    $user->setIdLoja(1);

    $uc->inserir($user);
}