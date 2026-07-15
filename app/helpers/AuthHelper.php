<?php

class AuthHelper
{
    public static function check()
    {
        return isset($_SESSION['usuario']);
    }

    public static function user()
    {
        return $_SESSION['usuario'] ?? null;
    }

    public static function isAdmin()
    {
        return self::check() &&
               self::user()['cargo'] === 'admin';
    }

    public static function requireLogin()
    {
        if (!self::check()) {
            header("Location: index.php?action=showLogin");
            exit;
        }
    }

    public static function requireAdmin()
    {
        if (!self::isAdmin()) {
            header("Location: index.php?action=home");
            exit;
        }
    }
}