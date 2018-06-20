<?php

class connectClass {
    var $conn;

    function openConnect() {
        $servername = 'localhost';
        $username = '********';
        $password = '********';
        $dbname = 'lpw_g2';
        $this -> conn = new mysqli($servername, $username, $password, $dbname);
    }

    function getConn(){
        return $this -> conn;
    }
}
?>