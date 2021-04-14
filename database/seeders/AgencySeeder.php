<?php

namespace Database\Seeders;

use App\Models\Agency;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::create(['name' => 'Ag 1',]);
        Agency::create(['name' => 'Ag 2',]);
        Agency::create(['name' => 'Ag 3',]);
    }
}
