
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<form action="DescricaoLoja.php" method="post">        

            Codigo da Loja:<input type="text" name="loja" required /><br>
            <br><br><input type="submit"/>
</form>

<?php
    include 'controller/Loja_Controller.php';
    include 'model/Loja.php';
       
    $loja = new Loja_Controller();
  
    if (sizeof($_POST) != '') {
    $ARRAY = $loja->DescricaoLoja($_POST['loja']);
    $idPorLoja = Array();
    foreach($ARRAY as $descricaoLoja)
    {
        $idPorLoja[$descricaoLoja->idloja][] = $descricaoLoja;
    }
    foreach($idPorLoja as $IdLoja => $loja)
    {
        echo "<h3>LOJA ID: " . $IdLoja . "</h3>";   
        foreach($loja as $descricaoLoja)
        {
            echo 'Id Loja: ' . $descricaoLoja->id;
            echo '<br />';
            echo 'Razao Social: ' . $descricaoLoja->razaosocial;
            echo '<br />';        
            echo 'Endereço: ' . $descricaoLoja->endereco;
            echo '<br />';        
            echo 'Telefone: ' . $descricaoLoja->telefone;
            echo '<br />';
            echo 'E-mail: ' . $descricaoLoja->email;
                       
        }
    }
}

