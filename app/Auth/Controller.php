<?php
namespace App\Auth;
class Controller
{
    protected $conn = null;
    public function __construct()
    {
        $this->conn = mysqli_connect(database('host'),database('username'),database('password'),database('database_name'),database('port'));
    }
}