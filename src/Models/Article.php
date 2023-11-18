<?php
namespace App\Models;

use App\DB;

class Article extends Model {
    public static $table = 'articles';
    public $id;
    public $title;
    public $body;

    // public static function all(
    //     $db = new DB();
    //     return $db->all(self::$table, self::class);
    // )

}