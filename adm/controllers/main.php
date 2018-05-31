<?php

	class mainController {
		function __construct(){
		}

		public function index(){
			if(!isset($_SESSION["user"])){
				header("Location: index.php?c=m&a=l");
			}
			require("views/header.php");
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