<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::create(['name' => 'Batavier']);
        Manufacturer::create(['name' => 'Gnoezelle']);
        Manufacturer::create(['name' => 'Snella']);
        Manufacturer::create(['name' => 'BNC']);
        Manufacturer::create(['name' => 'Sporto']);
        Manufacturer::create(['name' => 'Mitcheltan-Scatt']);
        Manufacturer::create(['name' => 'Amslot']);
        Manufacturer::create(['name' => 'Dwarf']);
    }
}
