<?php
    class clientsController{
        function __construct(){
            require_once ("models/clientsModel.php");

        }
        public function listClients(){
            $client = new clientsModel();
            $client -> listClients();
            $result = $client -> getConsult();
            
            $arrayClients = array();

            while($line = $result->fetch_assoc()){
                array_push($arrayClients,$line);
            }
            require_once ("views/header.php");
            require_once ("views/clients/listClients.php");
            require_once ("views/footer.php");
        }
        public function addClient(){
            require_once ("views/header.php");
            require_once ("views/clients/insertClient.php");
            require_once ("views/footer.php");
        }
        public function insertClient(){
            $arrayClient["name"] = $_POST["name"];
            $arrayClient["tel"] = $_POST["tel"];
            $client = new clientsModel();
            $client -> insertClient($arrayClient);
            $idClient = $client -> getConsult();
            $this -> listClients();

        }
        public function alterClient($cod){
            $client = new clientsModel();
            $client -> consultClient($cod);
            $result = $client -> getConsult();
        
            if($arrayClient = $result->fetch_assoc()){
                require_once ("views/header.php");
                require_once ("views/clients/alterClient.php");
                require_once ("views/footer.php");
            }
        }
        public function updateClient(){
            $arrayClient["cod"] = $_POST["cod"];
            $arrayClient["name"] = $_POST["name"];
            $arrayClient["tel"] = $_POST["tel"];
            $client = new clientsModel();
            $client -> updateClient($arrayClient);
            $this -> listClients();
        }
        public function deleteClient($cod){
            $client = new clientsModel();
            $client -> deleteClient($cod);
            $this -> listClients();
        }
    }
?>