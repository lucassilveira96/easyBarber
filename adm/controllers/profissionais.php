<?php
    class profissionaisController{
        function __construct(){
            require_once ("models/profissionaisModel.php");
            require_once ("models/servicosModel.php");

        }
        public function listprofissionais(){
            $profissionais = new profissionaisModel();
            $profissionais -> listprofissionais();
            $result = $profissionais -> getConsult();
            
            $arrayprofissionais = array();

            while($line = $result->fetch_assoc()){
                array_push($arrayprofissionais,$line);
            }
            require_once ("views/header.php");
            require_once ("views/profissionais/listprofissionais.php");
            require_once ("views/footer.php");
        }
        public function addprofissionais(){
            $Servicos = new servicosModel();
            $Servicos -> listServicos();
            $result = $Servicos -> getConsult();
            
            $arrayServicos = array();

            while($line = $result->fetch_assoc()){
                array_push($arrayServicos,$line);
            }
            require_once ("views/header.php");
            require_once ("views/profissionais/insertprofissionais.php");
            require_once ("views/footer.php");
        }
        public function insertprofissionais(){
            $arrayprofissionais["name"] = $_POST["name"];
            $arrayprofissionais["tel"] = $_POST["tel"];
            $arrayprofissionais['servico']=$_POST['servico'];
            if($_POST['servico2']!="Selecione o Serviço"){
                $arrayprofissionais["servico2"]=$_POST['servico2'];
                $profissionais = new profissionaisModel();
                $profissionais -> insertprofissionais($arrayprofissionais);
                $idprofissionais = $profissionais -> getConsult();
                $this -> listprofissionais();
            }
            else{
            $profissionais = new profissionaisModel();
            $profissionais -> insertprofissionais1servico($arrayprofissionais);
            $idprofissionais = $profissionais -> getConsult();
            $this -> listprofissionais();
            }
        }
        public function alterprofissionais($cod){
            $profissionais = new profissionaisModel();
            $profissionais -> consultprofissionais($cod);
            $result = $profissionais -> getConsult();
        
            if($arrayprofissionais = $result->fetch_assoc()){
                require_once ("views/header.php");
                require_once ("views/profissionais/alterprofissionais.php");
                require_once ("views/footer.php");
            }
        }
        public function updateprofissionais(){
            $arrayprofissionais["cod"] = $_POST["cod"];
            $arrayprofissionais["end"] = $_POST["end"];
            $arrayprofissionais["tel"] = $_POST["tel"];
            $profissionais = new profissionaisModel();
            $profissionais -> updateprofissionais($arrayprofissionais);
            $this -> listprofissionais();
        }
        public function deleteprofissionais($cod){
            $profissionais = new profissionaisModel();
            $profissionais -> deleteprofissionais($cod);
            $this -> listprofissionais();
        }
    }
?>