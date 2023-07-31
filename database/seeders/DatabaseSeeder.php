<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Encuesta;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Database\Seeder;
use App\Model\User;


class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     * @return void
     */
   
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         Encuesta::factory(5)->create();
         Pregunta::factory(50)->create();
         Respuesta::factory(300)->create();

       
        $this->call(CarrerasSeeder::class);
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

    }
    
}
