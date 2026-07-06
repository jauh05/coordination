<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasUuids;

    protected $fillable = [
        'event_id_code',
        'event_token',
        'name',
        'category',
        'start_date',
        'd_day',
        'location',
        'province',
        'city',
        'target_audience',
        'estimated_budget',
        'description',
        'logo_path',
    ];

    protected $casts = [
        'start_date' => 'date',
        'd_day' => 'date',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'event_users')
                    ->withPivot('division_id', 'role', 'officer_id', 'member_id', 'permissions')
                    ->withTimestamps();
    }

    public function divisions()
    {
        return $this->hasMany(Division::class);
    }
}
