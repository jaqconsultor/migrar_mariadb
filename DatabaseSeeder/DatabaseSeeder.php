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
       DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); 
	   
       $$VACIAR_TABLAS$$
	   
       $$LLENAR_TABLAS$$
	   
       DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); 
	   
    }
}
