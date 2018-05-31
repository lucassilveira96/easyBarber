<?php
session_start();
if(!isset($_GET['c'])){
	require_once("controllers/main.php");
	$main = new mainController();
	$main ->index();
}
else{
	switch($_REQUEST['c']){
		case 'u'://controler user
			require_once("controllers/user.php");
			$user = new userController();

			if(!isset($_GET['a'])){
				$user -> index();
			}
			else{
				switch($_REQUEST['a']){
					case 'cl':
						$user -> consultLoginUser();
						break;
				}
			}
			break;
		case 'm': //controler main
			require_once("controllers/main.php");
			$main = new mainController();

			if(!isset($_GET['a'])){
				$main -> index();
			}
			else{
				switch($_REQUEST['a']){
					case 'i': $main -> index();break;
					case 'l': $main -> login();break;
					case 'sd': $main -> sessionDestroy();break;
				}
			}
			break;
		case 'u':
		require_once ("controllers/user.php");
		$user = new userController();
			if(!isset($_GET['a'])){
				$user -> index();
			}
			else{
				switch($_REQUEST['a']){
					case 'cl': $user -> consultLoginUser();
					break;
				}
			}
			break;
		case 'c':
			require_once ("controllers/clients.php");
			$client = new clientsController();
			
			if(!isset($_GET['a'])){
				$client -> index();
			}
			else{
				switch($_REQUEST['a']){
					case 'lc':
						$client -> listClients();
						break;
					case 'ac':
						$client -> addClient();
						break;
					case 'ic':
						$client ->insertClient();
						break;
					case 'alc':
						$cod = $_GET['id'];
						$client -> alterClient($cod);
						break;
					case 'uc':
						$client	->updateClient();
						break;
					case 'dc':
						$cod=$_GET['id'];
						$client -> deleteClient($cod);				

				}
			}

	break;
	case 's':
			require_once ("controllers/servicos.php");
			$servicos = new servicosController();
			
			if(!isset($_GET['a'])){
				$servicos -> index();
			}
			else{
				switch($_REQUEST['a']){
					case 'ls':
						$servicos -> listServicos();
						break;
					case 'as':
						$servicos -> addServicos();
						break;
					case 'is':
						$servicos ->insertServicos();
						break;
					case 'als':
						$cod = $_GET['id'];
						$servicos -> alterServicos($cod);
						break;
					case 'us':
						$servicos	->updateServicos();
						break;
					case 'ds':
						$cod=$_GET['id'];
						$servicos -> deleteServicos($cod);
						break;			

				}
			}
			break;
		case 'h':
			require_once ("controllers/horario.php");
			$horario = new horariosController();
				if(!isset($_GET['a'])){
					$horario -> index();
				}
				else{
					switch($_REQUEST['a']){
						case 'lh':
							$horario->listhorarios();
							break;
						case 'ah':
							$horario->addhorario();
							break;
						case 'ih':
							$horario->inserthorario();
							break;
						case 'dh':
							$cod=$_GET['id'];
							$horario -> deletehorarios($cod);
							break;		
					}
				}
			break;
		
		case 'p':
			require_once ("controllers/profissionais.php");
			$profissionais = new profissionaisController();
				if(!isset($_GET['a'])){
					$profissionais -> index();
				}
				else{
					switch($_REQUEST['a']){
						case 'lp':
						$profissionais->listprofissionais();
							break;
						case 'ap':
						$profissionais->addprofissionais();
							break;
						case 'ip':
						$profissionais->insertprofissionais();
							break;
						case 'alp':
							$cod = $_GET['id'];
							$profissionais -> alterprofissionais($cod);
							break;
						case 'dp':
							$cod=$_GET['id'];
							$profissionais -> deleteprofissionais($cod);
							break;		
					}
				}
			break;
		case 'g':
			require_once ("controllers/agenda.php");
			$horario = new agendaController();
				if(!isset($_GET['a'])){
					$horario -> index();
				}
				else{
					switch($_REQUEST['a']){
						case 'lg':
							$horario->listagenda();
							break;
						case 'ag':
							$horario->addagenda();
							break;
						case 'ig':
							$horario->insertagenda();
							break;
						case 'dg':
							$cod=$_GET['id'];
							$horario ->deleteagenda($cod);
							break;	
						case 'lhg':
							$horario->listhorariosdisp();
							break;
					}
				}
			break;
			}
	}
?>