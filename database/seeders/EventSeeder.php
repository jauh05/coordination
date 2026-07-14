<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Event;
use App\Models\EventUser;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();
        if ($user) {
            $event = Event::create([
                'name' => 'Festival Musik 2026',
                'event_id_code' => 'EVT-' . rand(1000, 9999),
                'event_token' => Str::random(10),
            ]);

            EventUser::create([
                'user_id' => $user->id,
                'event_id' => $event->id,
                'role' => 'owner',
            ]);
            
            echo "Event created for user " . $user->email . "\n";
        } else {
            echo "No user found.\n";
        }
    }
}
