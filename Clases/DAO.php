<?php
require_once("./DB-ACCESS/DB_ACCES.php");
class DAO
{

  public function CN()
  {
    $db = new db_access();
    return $db->connect();
  }

  function GetData()
  {
    $cn = $this->CN();
    $sql = "SELECT * FROM factura";
    $res = $cn->query($sql);
    if ($res->num_rows > 0) {
      $data = $res->fetch_all(MYSQLI_ASSOC);
      return $data;
    } else {
      return "0 results";
    }
  }

  function Validar($user, $pass)
  {
    $cn = $this->CN();
    $sql = "SELECT * FROM login  WHERE Usuario = ? AND `Contraseña` = ?";
    $stmt = $cn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($res->num_rows > 0) {
      $data = $res->fetch_all(MYSQLI_ASSOC);
      return $data;
    } else {
      return "0 results"; 
    }
  }
}
