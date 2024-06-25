<?php

class BankAutoloader {
    public static function register() {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    private static function autoload($class) {
        // Convert namespace to full file path
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $file = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }
}
