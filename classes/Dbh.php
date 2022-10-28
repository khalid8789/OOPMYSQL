<?php

class Dbh{
    protected function connect(){
        $host = "127.0.0.1";
        $user = "root";
        $db = "zuriphp";
        $password = "";
        $conn = new mysqli($host, $user, $password, $db);
        if(!$conn->connect_error){
           die("Connection failed:" .$conn->connect_error);
        } else{
            echo "connected to database successfully";
        }
        return $conn;
    
    }
    }
   



