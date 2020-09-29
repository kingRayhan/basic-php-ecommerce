<?php
/**
 * Created at: 7:54 AM
 * File: App.php
 */
session_start();

require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/helpers.php';

// Controllers
require_once __DIR__ . '/../controllers/AuthController.php';
require_once __DIR__ . '/../controllers/ProductController.php';
require_once __DIR__ . '/../controllers/CartController.php';
require_once __DIR__ . '/../controllers/OrderController.php';

class App
{
    private static $title = "Express Store";

    /**
     * @return string
     */
    public static function getTitle()
    {
        return self::$title;
    }

    /**
     * @param string $title
     */
    public static function setTitle($title)
    {
        self::$title = $title;
    }


    public function authenticate()
    {
        if (!session_user()) {
            header("Location: " . root_url() . '/login.php');
        }
    }
}