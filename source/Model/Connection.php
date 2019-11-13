<?php

class Connection{

    public static $instance;

    private function __contruct(){

    }

    public static function getInstance() {
        if(!isset(self::$instance)){
            self::$instance = mysqli_connect("localhost", "root", "", "cirurgia_ES");
        }

        return self::$instance;
    }
}

?>