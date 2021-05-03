<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //chamando model contato::metodo factory()->count(quantidade de dados)->create()
        \App\Models\SiteContato::factory()->count(100)->create();
    }
}
