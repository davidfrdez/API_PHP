<?php
class db_access
{

    private $host = "auth-db474.hstgr.io";
    private $user = "u505185247_jcanbus";
    private $pass = "Matias081053";
    private $db = "u505185247_eventos";

    public function __construct()
    {
    }
    public function Conexion()
    {
        $cn  = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if ($cn) {
            return $cn;
        } else {
            return mysqli_connect_error();
        }
    }
}
