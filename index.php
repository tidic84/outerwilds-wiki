<!DOCTYPE html>
<?php
    include './template/header.php';

    $request = $_SERVER['REQUEST_URI'] ?? '/';
        
    switch($request) {
        case '/':
            require './template/home.php';
            break;
        case '/articles':
            require './template/articles.php';
            break;
        case '/contact':
            require './template/contact.php';
            break;
        default:
            http_response_code(404);
            require './template/404.php';
            break;
    }


?>