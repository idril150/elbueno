<?php

namespace Database\Seeders;

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

        Permission::create(['name' => 'dashboard'])->syncRoles([$admin, $manager]);
        Permission::create(['name' => 'profile.index'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'profile.show'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'profile.create'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'profile.store'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'profile.edit'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'profile.update'])->syncRoles([$admin, $manager]);;
        Permission::create(['name' => 'profile.destroy'])->syncRoles([$admin, $manager]);;
    }
}
