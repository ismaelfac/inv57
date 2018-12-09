<?php

use App\User;
use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ISMAEL E. LASTRE ALVAREZ',
            'email' => 'ismaelfac@gmail.com',
            'password' => bcrypt('BrwQ12-123'),
            'entry' => 'portal',
            'is_active' => 1
        ]);
        User::create([
            'name' => 'ELIANA ROBLES',
            'email' => 'directora@inversionesyproyectos.com',
            'password' => bcrypt('Inversiones'),
            'entry' => 'portal',
            'is_active' => 1
        ]);
        User::create([
            'name' => 'VALERIA VASQUEZ CUESTA',
            'email' => 'vvasquez02@gmail.com',
            'password' => bcrypt('BrwQ12-123'),
            'entry' => 'portal',
            'is_active' => 1
        ]);
        User::create([
            'name' => 'LILIANA MARTINEZ APARICIO',
            'email' => 'lmartinez@gmail.com',
            'password' => bcrypt('BrwQ12-123'),
            'entry' => 'portal',
            'is_active' => 0
        ]);
        Role::create([
            'name' => 'Administrador',
            'slug' => 'administrador',
            'description' => 'Acceso total al sistema',
            'special' => 'all-access'
        ]);
        Role::create([
            'name' => 'Suspendidos',
            'slug' => 'suspendido',
            'description' => 'Sin acceso al sistema',
            'special' => 'no-access'
        ]);
        Role::create([
            'name' => 'Auditor',
            'slug' => 'auditor',
            'description' => 'Puede ver o Generar reportes de los modulos',
            'special' => null
        ]);
        Role::create([
            'name' => 'Clients',
            'slug' => 'clients',
            'description' => 'Asignado a los clientes dentro de los modulos',
            'special' => null
        ]);





    }
}
