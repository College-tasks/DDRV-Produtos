<?php
error_reporting("E_ALL");
error_reporting(E_ERROR);
    
class Conecta {

    public function conecta_db() {
        $link = mysql_connect("50.115.33.88:3306", "ddrvuser", "Senac2014");
        if ($link && mysql_select_db("ddrv")) {
            return $link;
        } else {
            return false;
        }
    }

}
