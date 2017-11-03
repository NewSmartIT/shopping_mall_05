<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
