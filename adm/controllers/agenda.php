<?php
    class agendaController{
        function __construct(){
            require_once ("models/agendaModel.php");
            require_once ("models/servicosModel.php");
            require_once ("models/clientsModel.php");
            require_once ("models/profissionaisModel.php");



        }
        public function listhorariosdisp(){
            $arrayagenda["date"] = $_POST["date"];
            $arrayagenda["servico"] = $_POST["servico"];
            $arrayagenda["profissionais"] = $_POST["profissionais"];
            $agenda = new agendaModel();
            $agenda -> listhorariosdisp($arrayagenda);
            $result = $agenda -> getConsult();
            $arrayagenda = array();

            while($line = $result->fetch_assoc()){
                array_push($arrayagenda,$line);
            }
            require_once ("views/header.php");
            require_once ("views/agenda/agendar2.php");
            require_once ("views/footer.php");
        }

        public function selectdatelist(){
            require_once ("views/header.php");
            require_once ("views/agenda/selectdatelist.php");
            require_once ("views/footer.php");
        }

        public function listagenda(){
            $arrayagenda['data']=$_POST['date'];
            $arrayagenda['profissionais']=$_POST['profissionais'];
            $agenda = new agendaModel();
            $agenda -> listagenda($arrayagenda);
            $result = $agenda -> getConsult();
            
            $arrayagenda = array();

            while($line = $result->fetch_assoc()){
                array_push($arrayagenda,$line);
            }
            require_once ("views/header.php");
            require_once ("views/agenda/listagenda.php");
            require_once ("views/footer.php");
        }
        public function addagenda(){
            $Servicos = new servicosModel();
            $Servicos -> listServicos();
            $result = $Servicos -> getConsult();
            
            $arrayServicos = array();

            while($line = $result->fetch_assoc()){
                array_push($arrayServicos,$line);
            }
            require_once ("views/header.php");
            require_once ("views/agenda/agendar.php");
            require_once ("views/footer.php");
        }
        public function inserirAgenda(){
            $arrayagenda["id"] = $_REQUEST["id"];
            $arrayagenda["cliente"] = $_REQUEST["cliente"];
            $agenda = new agendaModel();
            $agenda -> insertagenda($arrayagenda);
            $idagenda = $agenda -> getConsult();
            
        }
        public function alteragenda($cod){
            $agenda = new agendaModel();
            $agenda -> consultagenda($cod);
            $result = $agenda -> getConsult();
        
            if($arrayagenda = $result->fetch_assoc()){
                require_once ("views/header.php");
                require_once ("views/agenda/alteragenda.php");
                require_once ("views/footer.php");
            }
        }
        public function updateagenda(){
            $arrayagenda["cod"] = $_POST["cod"];
            $arrayagenda["name"] = $_POST["name"];
            $arrayagenda["tel"] = $_POST["tel"];
            $agenda = new agendaModel();
            $agenda -> updateagenda($arrayagenda);
            $this -> listagenda();
        }
        public function deleteagenda($cod){
            $agenda = new agendaModel();
            $agenda -> deleteagenda($cod);
            $this -> listagenda();
        }
    }
?>