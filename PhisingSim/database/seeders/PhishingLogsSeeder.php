<?php

namespace Database\Seeders;

use App\Models\PhishingLogs;
use Illuminate\Database\Seeder;

class PhishingLogsSeeder extends Seeder
{
    public function run(): void
    {
        PhishingLogs::create([
            'email' => 'test@example.com',
            'password' => 'password123',
            'ip_address' => '192.168.1.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
        ]);

        PhishingLogs::create([
            'email' => 'user@example.com',
            'password' => 'testpass456',
            'ip_address' => '192.168.1.2',
            'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7)',
        ]);
    }
}