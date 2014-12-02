<?php
    include 'controller/Produto_Controller.php';
    include 'model/produto.php';

    $OBSPRO = New Produto();
    
    $Produto = new Produto_Controller();
    $OBSPRO = $Produto->selectByID($_POST['produto']);
    echo '<h1>Detalhe do Produto</h1>';
    
    echo 'Produto Nome: ' . $OBSPRO->getNome() . '<br />';
    echo 'Produto Preço: ' . $OBSPRO->getPreco() . '<br />';
   


?>

