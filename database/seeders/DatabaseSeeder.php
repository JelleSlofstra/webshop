<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ManufacturerSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductColourSeeder::class);
        $this->call(ProductGenderSeeder::class);
        $this->call(ProductSizeSeeder::class);
        $this->call(ProductVariantSeeder::class);
        $this->call(ProductImagesSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
