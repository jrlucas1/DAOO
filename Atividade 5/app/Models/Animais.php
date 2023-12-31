<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animais extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'sexo', 'peso', 'idade'];

    public function owner(){
        return $this->belongsTo(User::class);
    }
    
}
