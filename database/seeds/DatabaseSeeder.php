<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = factory(User::class)->create([
            'email' => 'admin@local',
        ]);
    }
}
