<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $table = 'fields';
    protected $guarded = [];

    public function users(){
        return $this->belongsToMany(User::class, 'userfields', 'field_id', 'user_id');
    }
}
