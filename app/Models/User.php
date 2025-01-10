<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function friends(){
        return $this->belongsToMany(User::class, 'friendlists', 'user_id', 'friends_id')
                    ->withPivot('status', 'created_at', 'updated_at')  // Menyertakan data pivot
                    ->withTimestamps();
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function fields(){
        return $this->belongsToMany(Field::class, 'userfields', 'user_id', 'field_id');
    }

    public function messages(){
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function wishlists(){
        return $this->hasMany(WishList::class);
    }
}
