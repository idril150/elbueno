<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'victor',
            'email' => 'victor@admin.com',
            'email_verified_at' => now(),
            'carrera' => 'sistemas',
            'Ncontrol' => '1827000',
            'telefono' => '9612583636',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('admin');

        User::create([
            'name' => 'Jorge',
            'email' => 'Jorge@manager.com',
            'carrera' => 'quimica',
            'email_verified_at' => now(),
            'Ncontrol' => '18270000',
            'telefono' => '9612171193',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('manager');

        User::create([
            'name' => 'mairo',
            'email' => 'mairo@manager.com',
            'email_verified_at' => now(),
            'carrera' => 'sistemas',
            'Ncontrol' => '18270000',
            'telefono' => '9612703230',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('user');
    }
}
