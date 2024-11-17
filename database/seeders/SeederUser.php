<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SeederUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('a'),
                'empresa_id' => 1
            ],
        );

        $usu = [
            [
                'name' => 'Karen Sánchez',
                'email' => 'karen@sanchez.com',
                'password' => bcrypt('a'),
                'empresa_id' => 1
            ],
            [
                'name' => 'Braian Stanli',
                'email' => 'braian@stanli.com',
                'password' => bcrypt('a'),
                'empresa_id' => 2
            ],
            [
                'name' => 'Esther Cárcamo',
                'email' => 'esther@carcamo.com',
                'password' => bcrypt('a'),
                'empresa_id' => 3
            ],
            [
                'name' => 'Alejandro Sandoval',
                'email' => 'alejandro@sandoval.com',
                'password' => bcrypt('a'),
                'empresa_id' => 4
            ],
        ];

        DB::table('users')->insert($usu);

        // Creo el Rol  administrador 
        $rol = Role::create(['name' => 'Administrador']);

        // Se le dan todos los permisos pertienentes 
        $permisos = Permission::pluck('id', 'id')->all();

        //se sincroniza el permiso al rol
        $rol->syncPermissions($permisos);

        // Se asigna el rol 
        $usuario->assignRole([$rol->id]);
    }
}
