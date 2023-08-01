<?php 

require_once("./Clases/DAO.php");

class GetData{  

    public $data;
    public function __construct(){

    }
    function GetDatas(){
        $dao = new DAO();
        $res = $dao->GetData();
        return json_encode($res);
    }
    function ValidarUser($json){
        $user=$json->user;
        $pass=$json->pass;
        $dao = new DAO();
        $res = $dao->Validar($user,$pass);
        return json_encode($res);
    }
}
?>