<center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form action="InsereUsuario.php" method="get">
        <table border='1' align=‘center'>
            <tr><td align='center'>

                    Razão Social: <input type="text" name="razaosocial">
                    <br>Endereço: <input type="text" name="endereco">
                    <br>E-mail: <input type="text" name="email">
                    <br>Telefone: <input type="text" name="telefone">
                    <br>Categoria: <select name="categoria">

                        <?php
                        $catCont = new Categoria_Controller();
                        $categorias = $catCont->listarCategoria();

                        foreach ($categorias as $item) {
                            print("<option value='$item->getId()'>$item->getCategoria()</option>");
                        }
                        ?>
                    </select>

                    <br><br><input type="submit" value="Inserir Empresa">
                </td></tr>
        </table>
    </form>
    <p><a href="Cadastro_loja.php">Voltar</a>
</center>