<?php

namespace Database\Seeders;

use App\Models\StockStatus;
use Illuminate\Database\Seeder;

class StockStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StockStatus::create(['status' => 'In_Stock']);
        StockStatus::create(['status' => 'Not_In_Stock']);
    }
}
