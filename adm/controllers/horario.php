<?php
    class horariosController{
        function __construct(){
            if(!isset($_SESSION["user"])){
				header("Location: index.php?c=m&a=l");
			}
            require_once ("models/horariosModel.php");

        }
        public function listhorarios(){
            $horario = new horariosModel();
            $horario -> listhorarios();
            $result = $horario -> getConsult();
            
            $arrayhorario = array();

            while($line = $result->fetch_assoc()){
                array_push($arrayhorario,$line);
            }
            require_once ("views/header.php");
            require_once ("views/horarios/listhorario.php");
            require_once ("views/footer.php");
        }
        public function addhorario(){
            require_once ("views/header.php");
            require_once ("views/horarios/inserthorario.php");
            require_once ("views/footer.php");
        }
        public function inserthorario(){
            $arrayhorario["hora"] = $_POST['hora'];
            $horario = new horariosModel();
            $horario -> inserthorarios($arrayhorario);
            $idClient = $horario -> getConsult();
            $this -> listhorarios();

        }
        public function deletehorarios($cod){
            $barbearia = new horariosModel();
            $barbearia -> deletehorarios($cod);
            $this -> listhorarios();
        }
    }
    ?>