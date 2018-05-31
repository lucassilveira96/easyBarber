<?php
    class servicosController{
        function __construct(){
            require_once ("models/servicosModel.php");

        }
        public function listServicos(){
            $Servicos = new servicosModel();
            $Servicos -> listServicos();
            $result = $Servicos -> getConsult();
            
            $arrayServicos = array();

            while($line = $result->fetch_assoc()){
                array_push($arrayServicos,$line);
            }
            require_once ("views/header.php");
            require_once ("views/servicos/listServicos.php");
            require_once ("views/footer.php");
        }
        public function addServicos(){
            require_once ("views/header.php");
            require_once ("views/Servicos/insertServicos.php");
            require_once ("views/footer.php");
        }
        public function insertServicos(){
            $arrayServicos["name"] = $_POST["name"];
            $arrayServicos["valor"] = $_POST["valor"];
            $Servicos = new servicosModel();
            $Servicos -> insertServicos($arrayServicos);
            $idClient = $Servicos -> getConsult();
            $this -> listServicos();

        }
        public function alterServicos($cod){
            $Servicos = new servicosModel();
            $Servicos -> consultServicos($cod);
            $result = $Servicos -> getConsult();
        
            if($arrayServicos = $result->fetch_assoc()){
                require_once ("views/header.php");
                require_once ("views/servicos/alterServicos.php");
                require_once ("views/footer.php");
            }
        }
        public function updateServicos(){
            $arrayServicos["cod"] = $_POST["cod"];
            $arrayServicos["name"] = $_POST["name"];
            $arrayServicos["valor"] = $_POST["val"];
           
            $Servicos = new servicosModel();
            $Servicos -> updateServicos($arrayServicos);
            $this -> listServicos();
        }
        public function deleteServicos($cod){
            $Servicos = new servicosModel();
            $Servicos -> deleteServicos($cod);
            $this -> listServicos();
        }
    }
?>