<?php

namespace Database\Seeders;

use App\Models\Tiket;
use App\Models\TiketType;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        $premium = TiketType::where('name', 'premium')->first();
        $reguler = TiketType::where('name', 'reguler')->first();

        $tickets = [
            [
                'event_id' => 1,
                'ticket_type_id' => $premium->id,
                'harga' => 1500000,
                'stok' => 100,
            ],
            [
                'event_id' => 1,
                'ticket_type_id' => $reguler->id,
                'harga' => 500000,
                'stok' => 500,
            ],
            [
                'event_id' => 2,
                'ticket_type_id' => $premium->id,
                'harga' => 200000,
                'stok' => 300,
            ],
            [
                'event_id' => 3,
                'ticket_type_id' => $premium->id,
                'harga' => 300000,
                'stok' => 200,
            ],
        ];

        foreach ($tickets as $ticket) {
            Tiket::create($ticket);
        }
    }
}