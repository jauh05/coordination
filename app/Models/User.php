<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'two_factor_secret',
        'trusted_device_tokens',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
        'trusted_device_tokens',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'trusted_device_tokens' => 'array',
        ];
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_users')
                    ->withPivot('division_id', 'role', 'officer_id', 'member_id', 'permissions')
                    ->withTimestamps();
    }

    public function eventUsers()
    {
        return $this->hasMany(EventUser::class);
    }
}
