    
<select name="categoria">
<?php
    
    include 'controller/Categoria_Loja_Controller.php';
    include 'model/Categoria_Loja.php';

    $catCont = New Categoria_Loja_Controller();
    $categorias = $catCont->listarCategoria();

    //print_r($categorias);

    foreach ($categorias as $item) {
      echo "<option value=" . $item->getId() . ">" . $item->getCategoria() . "</option>";
    }
    ?>
</select>