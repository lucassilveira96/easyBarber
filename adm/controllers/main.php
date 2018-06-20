<?php

	class mainController {
		function __construct(){
			require_once ("models/agendaModel.php");
		}

		public function index(){
			if(!isset($_SESSION["user"])){
				header("Location: index.php?c=m&a=l");
			}
            $agenda = new agendaModel();
            $agenda -> listagendainicio();
            $result = $agenda -> getConsult();
            
            $arrayagenda = array();

            while($line = $result->fetch_assoc()){
                array_push($arrayagenda,$line);
            }
			require("views/header.php");
			require("views/agenda/listagenda.php");
			require("views/footer.php");
		}
		public function login(){
			require("views/users/login.php");
		}
		public function sessionDestroy(){
			session_destroy();
			header("Location: index.php?c=m&a=l");
		}
	}
?>