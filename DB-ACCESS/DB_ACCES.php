<?php
class db_access
{

 
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "crud";
    private $port ="3376";
  public function __construct()
  {
  }

  public function connect(){
    $conectarDB=mysqli_connect($this->host,$this->user,$this->password,$this->db,$this->port);
    if($conectarDB){
      //echo true;
      return $conectarDB;
    }else {
      //echo false;
      return "mal";
    }
  }
} 
