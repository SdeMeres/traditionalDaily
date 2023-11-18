<?php
namespace App\Controllers

class PublicController {
    public function index(){
        $name = 'Säde';
        $list = ['kohuke','vitamiinivesi'];
        include 'viuud/tunnist.php';
    
    }
    public function about(){
        include 'viuud/about.php';
    }
}