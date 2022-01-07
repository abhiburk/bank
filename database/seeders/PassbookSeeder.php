<?php

namespace Database\Seeders;

use App\Models\Passbook;
use Illuminate\Database\Seeder;

class PassbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passbook::factory()
            ->count(10)
            ->create();
    }
}
