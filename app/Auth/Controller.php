<?php
namespace App\Auth;
class Controller
{
    protected $conn = null;
    protected $auth = null;
    public function __construct()
    {
        $db = include(__DIR__."/../config/database.php");
        $this->auth = include(__DIR__."/../config/auth.php");
        $this->conn = mysqli_connect($db['host'],$db['username'],$db['password'],$db['database_name'],$db['port']);
    }
}