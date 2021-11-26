<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    use HasFactory;

    /**
    * @var array
    **/
    protected $fillable = [
        'titulo', 'consola', 'esrb', 'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
