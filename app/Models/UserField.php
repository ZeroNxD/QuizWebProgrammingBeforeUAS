<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserField extends Model
{
    use HasFactory;
    protected $table = 'userfields';
    protected $guarded = [];

    public function field(){
        return $this->belongsTo(Field::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
