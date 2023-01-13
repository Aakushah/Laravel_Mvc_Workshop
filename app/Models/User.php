<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
 
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;
 
    public function videos() {
        return $this->hasMany(Video::class,'user_id', 'id');
    }
 
}

