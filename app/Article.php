<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "article";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'name', 'description',
        'image', "cost", 'sale', 'stock', 'id_provider', 'id_departament', 'id_status', 'edit_user'
    ];
}
