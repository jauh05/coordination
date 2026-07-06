<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class EventUser extends Model
{
    use HasUuids;

    protected $table = 'event_users';

    protected $fillable = [
        'user_id',
        'event_id',
        'division_id',
        'role',
        'officer_id',
        'member_id',
        'permissions',
    ];

    protected $casts = [
        'permissions' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
