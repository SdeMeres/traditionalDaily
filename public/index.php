<?php
switch($_SERVER['REQUEST_URI']){
    case '/':
        include 'viuud/tunnist.php';
        break;
    case '/about':
        include 'viuud/about.php';
        break;
    default:
        http_response_code(404);
}