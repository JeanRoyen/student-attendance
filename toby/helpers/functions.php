<?php

use JetBrains\PhpStorm\NoReturn;

if (! function_exists('dd')) {
    #[NoReturn]
    function dd(...$vars): void
    {
        var_dump($vars);
        exit();
    }
}

if (! function_exists('env')) {
    // Si la variable d'env n'existe pas, le default est envoyé.
    function env(string $key, $default = null): mixed
    {
        return $_ENV[$key] ?? $default;
    }
}
