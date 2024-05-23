<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //EL SISTEMA VA A TENER 2 ROLES
        //Administrador
        //Secretaria

        $admin = Role::create(['name' => 'admin']);
        $secretaria = Role::create(['name' => 'secretaria']);

        Permission::create(['name'=>'index'])->syncRoles([$admin,$secretaria]);
        Permission::create(['name'=>'asistencias.reportes'])->syncRoles([$admin,$secretaria]);
        Permission::create(['name' => 'asistencias.pdf'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'asistencias.pdf_fechas'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'home'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'miembros'])->syncRoles([$admin]);
        Permission::create(['name' => 'ministerios'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'asistencias'])->syncRoles([$admin, $secretaria]);

    }
}
