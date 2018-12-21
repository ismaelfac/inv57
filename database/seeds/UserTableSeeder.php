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
        try {
            DB::beginTransaction();
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
                'name' => 'Clientes',
                'slug' => 'clients',
                'description' => 'Asignado a los clientes: <br> Permite: Crear clasificados, Inmuebles, editarlos',
                'special' => null
            ]);
            Role::create([
                'name' => 'Asesores',
                'slug' => 'consultants',
                'description' => 'Asignado a los asesores: <br> Permite: Crear, actualizar desactivar inmuebles y clientes.',
                'special' => null
            ]);

            $user1 = User::create([
                'name' => 'ISMAEL E. LASTRE ALVAREZ',
                'email' => 'ismaelfac@gmail.com',
                'password' => bcrypt('BrwQ12-123'),
                'entry' => 'portal',
                'is_active' => 1
            ]);
            $user1->roles()->sync(['1']); //update roles
            $user2 = User::create([
                'name' => 'ELIANA ROBLES',
                'email' => 'directora@inversionesyproyectos.com',
                'password' => bcrypt('Inversiones'),
                'entry' => 'portal',
                'is_active' => 1
            ]);
            $user2->roles()->sync(['1']); //update roles
            $user3 = User::create([
                'name' => 'VALERIA VASQUEZ CUESTA',
                'email' => 'vvasquez02@gmail.com',
                'password' => bcrypt('BrwQ12-123'),
                'entry' => 'portal',
                'is_active' => 1
            ]);
            $user3->roles()->sync(['3', '4']); //update roles
            $user4 = User::create([
                'name' => 'LILIANA MARTINEZ APARICIO',
                'email' => 'lmartinez@gmail.com',
                'password' => bcrypt('BrwQ12-123'),
                'entry' => 'portal',
                'is_active' => 0
            ]);
            $user4->roles()->sync(['4']); //update roles
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

    }
}
