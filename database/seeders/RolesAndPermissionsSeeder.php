<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

use Spatie\Permission\Models\Role;


class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Permisos nuevos que deseas agregar
        $newPermissions = [
            'view welcome',
            'edit profile',
            'view soat',
            'view peritajes',
            'view tarifas tecno',
            'view crud usuarios',
            'export citas',
            'view contactos',
            'update citas',
            'delete citas',
            'manage agenda',
            'view eventos',
            'export data',
            'view dashboard',
            'edit profile',
            'update profile',
            'delete profile'
        ];

        // Crear permisos nuevos si no existen
        foreach ($newPermissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Asignar los permisos a roles ya existentes sin duplicar

        // Busca los roles existentes
        $admin = Role::findByName('admin'); // Asegúrate de que este rol ya exista en tu base de datos
        $user = Role::findByName('cliente');   // Lo mismo para este

        // Asignar todos los permisos al rol de admin
        if ($admin) {
            $admin->syncPermissions($newPermissions);  // Asigna todos los nuevos permisos al rol de admin
        }

        // Asignar permisos específicos al rol de user
        if ($user) {
            $userPermissions = [
                'view welcome',
                'view dashboard',
                'edit profile',
                'view soat',
                'view peritajes',
                'view tarifas tecno',
                'view contactos',
                'update citas',
                'manage agenda',
                'view dashboard',
                'view eventos',
            ];

            $user->syncPermissions($userPermissions);  // Asigna solo ciertos permisos al rol de user
        }
    }
}
