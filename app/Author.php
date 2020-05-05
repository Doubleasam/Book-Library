<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Table Name
    protected $table = 'authors';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $Timestamps = true;

    public function books(){
        return $this->hasMany('App\Book');
    }
}
