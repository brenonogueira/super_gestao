<?php

namespace Database\Seeders;

use App\Models\MotivoContato;
use App\Models\SiteContato;
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
        //chamando SiteContatoSeeder para popular db
      //  $this->call(SiteContatoSeeder::class);
        $this->call(MotivoContatoSeeder::class);
    }
}
