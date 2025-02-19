<?php
include './template/header.php';

$page = $_GET['page'] ?? 'home';

echo "Page demandée : " . htmlspecialchars($page);

switch ($page) {
    case 'home':
        require './template/home.php';
        break;
    case 'articles':
        require './template/articles.php';
        break;
    case 'contact':
        require './template/contact.php';
        break;
    default:
        http_response_code(404);
        require './template/404.php';
        break;
}
?>
