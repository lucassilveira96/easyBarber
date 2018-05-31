<?php

	if(!isset($_GET['c'])) {
		require_once("controllers/site.php");
		$site = new siteController;
		$site -> index();
	}

	else{
		switch($_REQUEST['c']){
			case 's': //controller site
				require_once("controllers/site.php");
				$site = new siteController();

				if(!isset($_GET['a'])){
					$site -> index();
				}else {
					switch ($_REQUEST['a']) {
						case 'h': $site -> index(); break;
						case 's': $site -> sobre(); break;
					}
				}
			break;

			case 'c':
			require_once("controllers/clientes.php");
			$cliente = new clientesController();

			if(!isset($_GET['a'])){
				$cliente -> index();
			}else {
				switch($_REQUEST['a']){
					case 'cc': $cliente -> formCadastro(); break;
					case 'cca': $cliente -> cadastroCliente(); break;
					case 'bb': $cliente -> listaClientes(); break;
				}
			}	
		break;
	}
}
?>