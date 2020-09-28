<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $table = "users2";
    public $timestamps = false;

    public function getEmailAttribute($value){
        return ucFirst($value);
    }
    public function getAddressAttribute($value){
        return $value.', Pakistan';
    }

}
