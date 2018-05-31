<?php
    class profissionaisModel{
        var $result;

        public function __construct(){
            require_once ("db/connectClass.php");
        }

        public function listprofissionais(){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = 'SELECT * FROM profissionais order by nome';
            $this ->result = $conn -> query($sql);
        }
        public function consultprofissionais($cod){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "SELECT * FROM profissionais WHERE id = ".$cod.";";
            $this ->result = $conn -> query($sql);
        }
        public function insertprofissionais($arrayprofissionais){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "INSERT INTO profissionais(nome,telefone) VALUES ('".$arrayprofissionais['name']."','".$arrayprofissionais['tel']."');";
            $conn -> query($sql);
            $sql = "SELECT id FROM profissionais where nome=".$arrayprofissionais['name']."";
            $conn -> query($sql);
            $this ->result = $conn -> insert_id;
            $sql = "INSERT INTO servicos_por_profissionais(profissionais_id,servicos_id) VALUES ($this->result,'".$arrayprofissionais['servico']."');";
            $conn -> query($sql);
            $sql = "INSERT INTO servicos_por_profissionais(profissionais_id,servicos_id) VALUES ($this->result,'".$arrayprofissionais['servico2']."');";
            $conn -> query($sql);
            $this ->result = $conn -> insert_id;
        }
        public function insertprofissionais1servico($arrayprofissionais){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "INSERT INTO profissionais(nome,telefone) VALUES ('".$arrayprofissionais['name']."','".$arrayprofissionais['tel']."');";
            $conn -> query($sql);
            $sql = "SELECT id FROM profissionais where nome=".$arrayprofissionais['name']."";
            $conn -> query($sql);
            $this ->result = $conn -> insert_id;
            $sql = "INSERT INTO servicos_por_profissionais(profissionais_id,servicos_id) VALUES ($this->result,'".$arrayprofissionais['servico']."');";
            $conn -> query($sql);
            $this ->result = $conn -> insert_id;
        }
        public function updateprofissionais($arrayprofissionais){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "UPDATE profissionais set nome='".$arrayprofissionais['name']."', telefone='".$arrayprofissionais['tel']."' where id=".$arrayprofissionais['cod'].";";
            $this ->result = $conn -> query($sql);
        }
        public function deleteprofissionais($cod){
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = "DELETE FROM profissionais WHERE id='".$cod."';";
            $this ->result = $conn -> query($sql);
        }
        public function getConsult(){
            return $this -> result;
        }
    }
?>