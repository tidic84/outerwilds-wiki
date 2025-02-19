<?php
include './template/header.php';
$page = $_GET['page'] ?? 'home';

$pages = [
    'home' => './template/home.php',
    'articles' => './template/articles.php',
    'contact' => './template/contact.php'
];

if (array_key_exists($page, $pages)) {
    require $pages[$page];
} else {
    http_response_code(404);
    require './template/404.php';
}
?>
