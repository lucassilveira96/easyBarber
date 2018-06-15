<?php
    class horariosModel{
        var $result;

        public function __construct(){
            require_once ("db/connectClass.php");
        }

        public function listhorarios(){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = 'SELECT * FROM horarios order by hora';
            $this ->result = $conn -> query($sql);
        }
        public function consulthorarios($cod){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "SELECT * FROM horarios WHERE id = ".$cod.";";
            $this ->result = $conn -> query($sql);
        }
        public function inserthorarios($arrayhorarios){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "INSERT INTO horarios(hora) VALUE ('".$arrayhorarios['hora']."');";
            $conn -> query($sql);
            $this ->result = $conn -> insert_id;
        }
        public function deletehorarios($cod){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "DELETE FROM horarios WHERE id='".$cod."';";
            $this ->result = $conn -> query($sql);
        }
        public function addDiaFuncionamento($dia){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "INSERT into dia_func (data_func) value ('$dia')";
            $this ->result = $conn -> query($sql);
        }
        public function getConsult(){
            return $this -> result;
        }
    }
?>