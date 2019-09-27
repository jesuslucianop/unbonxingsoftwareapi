<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = "provider";
    protected $primaryKey = 'id';
    protected $fillable = ['firstname','lastname', 
    'phone', 'email','extension','zipcode','identification_rnc','id_location'
    ,'notification','id_currency','id_status','note'];
}
