<?php

namespace Database\Seeders;

use App\Models\manufacturer;
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
        manufacturer::create(['name' => 'Batavier']);
        manufacturer::create(['name' => 'Gnoezelle']);
        manufacturer::create(['name' => 'Snella']);
        manufacturer::create(['name' => 'BNC']);
        manufacturer::create(['name' => 'Sporto']);
        manufacturer::create(['name' => 'Mitcheltan-Scatt']);
        manufacturer::create(['name' => 'Amslot']);
        manufacturer::create(['name' => 'Dwarf']);
    }
}
