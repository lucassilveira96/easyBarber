<?php

    class clientesController {
        function __construct(){
            require_once ("models/clientesModel.php");
     }
        function listaClientes() {
            $client = new clientesModel();
            $client -> listaClientes();
            $result = $client -> getConsult();
            
            $arrayClients = array();

            while($line = $result->fetch_assoc()){
                array_push($arrayClients,$line);
            }

            require_once ("views/header.php");
            require_once ("views/clientes/listaClientes.php");
            
        }
    }
?>