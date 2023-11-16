<?php
spl_autoload_register(function ($class){
   var_dump($class);
});
require __DIR__ . '/../src/Router.php';
$router = new Router();
// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         $name = 'Säde';
//         $list = ['kohuke','vitamiinivesi'];
//         include 'viuud/tunnist.php';
//         break;
//     case '/about':
//         include 'viuud/about.php';
//         break;
//     default:
//         http_response_code(404);
// }