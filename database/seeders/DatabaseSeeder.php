<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\Professional;
use App\Models\Service;
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
        User::factory(200)->create();
        Company::factory(50)->create();
        Professional::factory(300)->create();
        Service::factory(1000)->create();
    }
}
