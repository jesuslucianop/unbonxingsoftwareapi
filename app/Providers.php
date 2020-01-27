<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    protected $table = "provider";
    protected $primaryKey = 'id';
    protected $fillable = ['id','firstname','lastname', 
    'phone', "page",'email','extension','zipcode','identification_rnc','id_location'
    ,'notification','id_currency','id_status','note'];

}
