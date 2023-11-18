<?php
namespace App\Controllers;

use App\DB;
use App\Models\Article;
use App\Models\User;

class ArticlesController {
    public function index(){
    
        $articles = Article::all();
        include 'viuud/articles/index.php';
   
    }
    public function create(){
        include 'viuud/articles/create.php';
    }
    public function store(){
        var_dump($_GET);
        var_dump($_POST);
    }
}