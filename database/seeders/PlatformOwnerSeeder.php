<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PlatformOwnerSeeder extends Seeder
{
    public function run(): void
    {
        $password = env('PLATFORM_OWNER_PASSWORD');

        if (empty($password)) {
            throw new \RuntimeException(
                'PLATFORM_OWNER_PASSWORD is not set. Set it in .env before running this seeder — '
                . 'it will not fall back to a hardcoded default.'
            );
        }

        User::create([
            'agency_id' => null, // Not tied to any agency
            'username' => 'soud@alphia.net',
            'full_name' => 'Soud Shoja',
            'email' => 'soud@alphia.net',
            'password' => Hash::make($password),
            'role' => 'platform_owner',
            'phone_verified_at' => now(),
            'email_verified_at' => now(),
            'is_active' => true,
        ]);
    }
}
