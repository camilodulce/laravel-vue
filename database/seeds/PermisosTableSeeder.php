<?php

use Illuminate\Database\Seeder;
use App\Models\Permiso;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permiso::class, 50)->create();
    }
}
