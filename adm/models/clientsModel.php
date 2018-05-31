<?php
    class clientsModel{
        var $result;

        public function __construct(){
            require_once ("db/connectClass.php");
        }

        public function listClients(){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = 'SELECT * FROM clientes';
            $this ->result = $conn -> query($sql);
        }
        public function consultClient($cod){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "SELECT * FROM clientes WHERE id = ".$cod.";";
            $this ->result = $conn -> query($sql);
        }
        public function insertClient($arrayClient){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "INSERT INTO clientes(nome,telefone) VALUES ('".$arrayClient['name']."','".$arrayClient['tel']."');";
            $conn -> query($sql);
            $this ->result = $conn -> insert_id;
        }
        public function updateClient($arrayClient){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "UPDATE clientes set nome='".$arrayClient['name']."', telefone='".$arrayClient['tel']."' where id=".$arrayClient['cod'].";";
            $this ->result = $conn -> query($sql);
        }
        public function deleteClient($cod){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "DELETE FROM clientes WHERE id='".$cod."';";
            $this ->result = $conn -> query($sql);
        }
        public function getConsult(){
            return $this -> result;
        }
    }
?>