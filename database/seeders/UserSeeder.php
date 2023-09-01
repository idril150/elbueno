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
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'carrera' => 'admin',
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('admin');

        User::create([
            'name' => 'Sistemas',
            'email' => 'Sistemas_cord@tecnm.com',
            'carrera' => 'Ingeniería en Sistemas Computacionales',
            'email_verified_at' => now(),
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('manager');

        User::create([
            'name' => 'Industrial',
            'email' => 'Industrial_cord@tecnm.com',
            'carrera' => 'Ingeniería Industrial',
            'email_verified_at' => now(),
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('manager');

        User::create([
            'name' => 'Electrónica',
            'email' => 'Electronica_cord@tecnm.com',
            'carrera' => 'Ingeniería Electrónica',
            'email_verified_at' => now(),
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('manager');

        User::create([
            'name' => 'Electrica',
            'email' => 'Electrica_cord@tecnm.com',
            'carrera' => 'Ingeniería Electrica',
            'email_verified_at' => now(),
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('manager');

        User::create([
            'name' => 'Mecánica',
            'email' => 'Mecanica_cord@tecnm.com',
            'carrera' => 'Ingeniería Mecánica',
            'email_verified_at' => now(),
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('manager');

        User::create([
            'name' => 'Bioquímica',
            'email' => 'Bioquimica_cord@tecnm.com',
            'carrera' => 'Ingeniería Bioquímica',
            'email_verified_at' => now(),
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('manager');

        User::create([
            'name' => 'Gestión Empresarial',
            'email' => 'Gestion_cord@tecnm.com',
            'carrera' => 'Ingeniería en Gestión Empresarial',
            'email_verified_at' => now(),
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('manager');

        User::create([
            'name' => 'Química',
            'email' => 'Quimica_cord@tecnm.com',
            'carrera' => 'Ingeniería Química',
            'email_verified_at' => now(),
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('manager');

        User::create([
            'name' => 'Logística',
            'email' => 'Logistica_cord@tecnm.com',
            'carrera' => 'Ingeniería en Logística',
            'email_verified_at' => now(),
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('manager');

        User::create([
            'name' => 'Mecatrónica',
            'email' => 'Mecatronica_cord@tecnm.com',
            'carrera' => 'Ingeniería Mecatrónica',
            'email_verified_at' => now(),
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('manager');

        User::create([
            'name' => 'Mecatrónica',
            'email' => 'user@tecnm.com',
            'carrera' => 'Ingeniería Mecatrónica',
            'email_verified_at' => now(),
            'Ncontrol' => '00000000',
            'telefono' => '0000000000',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])-> assignRole('user');


    
    }
}
