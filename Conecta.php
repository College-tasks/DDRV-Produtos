<?php

class Conecta {

    public function conecta_db() {
        $link = mysql_connect("localhost", "root", "");
        if ($link && mysql_select_db("test")) {
            return $link;
        } else {
            return false;
        }
    }

}
