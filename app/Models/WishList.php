<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;
    protected $table = 'wishlist';
    protected $guarded = [];
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function likeduser(){
        return $this->belongsTo(User::class, 'liked_user_id');
    }
}
