<?php

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Integer;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Users::class, 5)->create();
 
    }
}
