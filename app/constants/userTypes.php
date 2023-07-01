<?php
namespace App\constants;
final class userTypes
{
    CONST ADMIN = 1;
    CONST CLIENT = 0;
    public static function getAll(): array
    {
        return [
            userTypes::ADMIN => 'admin',
            userTypes::CLIENT => 'client',
        ];
    }

    public static function getOne($index)
    {
        return userTypes::getAll()[$index] ?? null;
    }
}