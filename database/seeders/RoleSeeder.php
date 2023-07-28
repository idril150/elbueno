<?php

namespace Database\Seeders;

use App\Model\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Assign;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     *
     */
    public function run(): void
    {
        $admin = Role::Create(['name' => 'admin']);
        $manager = Role::Create(['name' => 'manager']);
        $user = Role::Create(['name' => 'user']);

        // Permisos generales
        Permission::create(['name' => 'dashboard'])->syncRoles([$admin, $manager, $user]);

        // Permisos para la creacion y edicion del curd de usuarios
        Permission::create(['name' => 'users.index'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'users.show'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'users.actualizar'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'users.store'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'users.update'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'users.destroy'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'users.edit'])->syncRoles([$admin, $manager]);;

        // Permisos para la creacion y edicion del curd de encuestas
        Permission::create(['name' => 'encuestas.show'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'encuestas.create'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'encuestas.edit'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'encuestas.index'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'encuestas.destroy'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'encuestas.cambiarEstado'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'encuestas.update'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'encuestas.guardarRespuestas'])->syncRoles([$admin, $manager]);;

        // Permisos para la creacion y edicion del curd de preguntas
        Permission::create(['name' => 'preguntas.show'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'preguntas.create'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'preguntas.edit'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'preguntas.index'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'preguntas.destroy'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'preguntas.update'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'preguntas.cambiarEstado'])->syncRoles([$admin, $manager]);;
        
          // Permisos para la creacion y edicion del curd de respuestas
          Permission::create(['name' => 'respuestas.show'])->syncRoles([$admin, $manager]);;
          Permission::create(['name' => 'respuestas.create'])->syncRoles([$admin, $manager]);;
          Permission::create(['name' => 'respuestas.createe'])->syncRoles([$admin, $manager]);;
          Permission::create(['name' => 'respuestas.edit'])->syncRoles([$admin, $manager]);;
          Permission::create(['name' => 'respuestas.index'])->syncRoles([$admin, $manager]);;
          Permission::create(['name' => 'respuestas.destroy'])->syncRoles([$admin, $manager]);;
          Permission::create(['name' => 'respuestas.update'])->syncRoles([$admin, $manager]);;
          Permission::create(['name' => 'respuestas.cambiarEstado'])->syncRoles([$admin, $manager]);;

           // Permisos para responder las encuestas
           Permission::create(['name' => 'responders.index'])->syncRoles([$user]);;


    }
}
