<?php

class userModel {
    var $result;
    public function consultUser($login) {
        require_once("db/connectClass.php");
        $Oconn = new connectClass();
        $Oconn -> openConnect();
        $conn = $Oconn -> getconn();
        $sql = 'SELECT * FROM barbearias WHERE email="'.$login.'"';
        $this -> result = $conn-> query($sql);
        //echo $sql;
    }

    public function getConsult() {
        return $this -> result;
    }
    
}