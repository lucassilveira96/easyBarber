<?php
    class servicosModel{
        var $result;

        public function __construct(){
            require_once ("db/connectClass.php");
        }

        public function listServicos(){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "SELECT * FROM servicos";
            $this ->result = $conn -> query($sql);
        }
        public function consultServicos($cod){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "SELECT * FROM servicos WHERE id = ".$cod.";";
            $this ->result = $conn -> query($sql);
        }
        public function insertServicos($arrayServicos){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "INSERT INTO servicos (nome,valor) VALUES ('".$arrayServicos['name']."','".$arrayServicos['valor']."');";
            $conn -> query($sql);
            $this ->result = $conn -> insert_id;
        }
        public function updateServicos($arrayServicos){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "UPDATE servicos set nome='".$arrayServicos['name']."', valor='".$arrayServicos['valor']."' where id=".$arrayServicos['cod'].";";
            $this ->result = $conn -> query($sql);
        }
        public function deleteServicos($cod){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "DELETE FROM servicos WHERE id='".$cod."';";
            $this ->result = $conn -> query($sql);
        }
        public function getConsult(){
            return $this -> result;
        }
    }
?>