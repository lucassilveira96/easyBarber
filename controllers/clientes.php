<?php

    class clientesController {

        function formCadastro() {
            require_once ("views/header.php");
            require_once ("views/clientes/formCadastro.php");
            require_once ("views/footer.php");
        }

        function cadastroCliente() {
            $cliente = array (
                "nome" => $_POST['nome'],
                "email" => $_POST['email'],
                "telefone" => $_POST['telefone'],
                "endereco" => $_POST['endereco']
            );

            require_once ("views/header.php");
            require_once ("views/clientes/cadastroCliente.php");
            require_once ("views/footer.php");
        }

        function listaClientes() {
            require_once ("models/clientesModel.php");
            $cliente = new clientesModel();
            $cliente -> listaClientes();
            $resultado = $cliente -> getConsulta();

            $arrayClientes = array();

            while($linha = $resultado->fetch_assoc()) {
                array_push($arrayClientes,$linha);
            }

            require_once ("views/header.php");
            require_once ("views/clientes/listaClientes.php");
            require_once ("views/footer.php");
        }
    }
?>