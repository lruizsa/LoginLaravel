<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Erabiltzaileak extends Model
{

    use HasFactory;

    protected $table = 'erabiltzaileak';

    protected $primaryKey = 'id';

    protected $fillable = [
        'izena',
        'abizena',
        'email',
        'password',
        'remember_token',
        'jaiotze_data',
        'created_at',
        'updated_at',
    ];

    public function createToken(){
        return Str::random(32);
    }
}