<?php

class clientesModel {
    var $resultado;
    public function listaClientes() {
        require_once("db/connectClass.php");
        $Oconn = new connectClass();
        $Oconn -> openConnect();
        $conn = $Oconn -> getconn();
        $sql = "SELECT * FROM clientes";

        $this -> resultado = $conn-> query($sql);
        //echo $sql;
    }

    public function getConsulta() {
        return $this -> resultado;
    }


}