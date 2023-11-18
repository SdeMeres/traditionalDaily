<?php
namespace App\Controllers;

use App\Models\Article;

class PublicController {
    public function index(){
        $articles = Article::all();
        include 'viuud/tunnist.php';
    
    }
    public function abouts(){
        include 'viuud/about.php';
    }
}