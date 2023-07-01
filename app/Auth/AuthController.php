<?php
namespace App\Auth;
use App\Auth\Controller;
use App\constants\userTypes;

class AuthController extends Controller
{
    // fetch_assoc
    public function login(string $email,string $password)
    {
        $table = auth('table');
        
        $def_email = auth('default_email');
        $def_password = auth('default_password');
        $def_type = auth('default_type');

        $user = $this->conn->query("SELECT * FROM `$table` WHERE `$def_email` LIKE '$email' and `$def_password` LIKE '$password'")->fetch_assoc();
        
        if($user){
            return [
                'user' => $user,
                'type' => userTypes::getOne($user[$def_type])
            ];
        }

        return false;
    }
}