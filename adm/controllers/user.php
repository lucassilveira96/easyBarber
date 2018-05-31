<?php
    class userController{

        public function consultLoginUser(){
            $login = $_POST['login'];
            require('models/userModel.php');
            $user = new userModel();
            $user -> consultUser($login);
            $result = $user -> getConsult();

            if($line = $result -> fetch_assoc()){
                $pass = $line['senha'];
                $passUser = $_POST["senha"];
                    if($pass = $passUser){
                        $pass = $line['senha'];
                        $passUser = $_POST["senha"];
                            if($pass == $passUser){
                                $_SESSION['idUser'] = $line['id'];
                                $_SESSION['user'] = $line['nome'];
                                header("Location: index.php?c=m&a=i");  
                            }
                            else{
                                print("SENHA ERRADA");
                            }              
                    }
                }
                    else{
                        print("usuario não existe");
                    }
        }
    }
?>