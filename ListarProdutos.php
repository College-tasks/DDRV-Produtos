<form action="ListarProdutos.php" method="post">        

            Codigo da Loja:<input type="text" name="loja" required /><br>
            <br><br><input type="submit"/>
</form>

<?php
    include 'controller/Produto_Controller.php';
    include 'model/produto.php';
    
    
    $Produto = new Produto_Controller();
    //if
    if (sizeof($_POST) != '') {
    $ARRAY = $Produto->listarProdutos($_POST['loja']);
    $idPorLoja = Array();
    foreach($ARRAY as $produtoItem)
    {
        $idPorLoja[$produtoItem->id_loja][] = $produtoItem;
    }
    foreach($idPorLoja as $IdLoja => $Produto)
    {
        echo "<h3>LOJA ID: " . $IdLoja . "</h3>";   
        foreach($Produto as $produtoItem)
        {
            echo 'Id Produto: ' . $produtoItem->id;
            echo '<br />';
            echo 'Nome: ' . $produtoItem->nome;
            echo '<br />';        
            echo '<hr/>';            
        }
    }
}