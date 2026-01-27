<?php

namespace Database\Seeders;

use App\Models\TiketType;
use Illuminate\Database\Seeder;

class TicketTypeSeeder extends Seeder
{
    public function run(): void
    {
        TiketType::insert([
            ['name' => 'reguler'],
            ['name' => 'premium'],
        ]);
    }
}
