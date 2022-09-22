<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contato;

class ContatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contato::factory()->times(20)->create();
    }
}
