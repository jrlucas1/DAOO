<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividades extends Model
{
    use HasFactory;
    protected $fillable = ['desc', 'valor', 'status'];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
