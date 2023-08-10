<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class user extends Authenticatable
{
    use HasApiTokens, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
 
        'email',
        'password',
        'last_name',
        'first_name',
        'phone',
        'role',
        'image_url',
        'adress',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {

            $user->first_name = strtolower($user->first_name);
            $user->last_name  =  strtolower($user->last_name);

        });
    }
    protected static function booted()
    {
        static::created(function ($user) {
            if ($user->role === 'client') {
                $user->client()->create();
            }
        });
    }
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function client()
    {
        return $this->hasOne(client::class);
    }



}
