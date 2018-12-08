<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->truncateTables([
            'password_resets',
            'users',
            'permission_role',
            'permissions',
            'roles',
            'role_user',
            'categories',
            'comments',
            'properties',
            'clients',
            'users',
            'posts',
            'identifications',
            'neighborhoods',
            'locations',
            'municipalities',
            'departaments',
            'countries',
            'type_properties',
            'rent_types',
            'identifications',
            'properties'
        ]);
        $this->call([
            PermissionsTableSeeder::class,
            CountryTableSeeder::class,
            DepartamentTableSeeder::class,
            MunicipalityTableSeeder::class,
            LocationTableSeeder::class,
            NeighborhoodTableSeeder::class,
            IdentificationTableSeeder::class,
            CivilstatusTableSeeder::class,
            UserTableSeeder::class,
            ClientsTableSeeder::class,
            TypePropertyTableSeeder::class,
            TypeRentsSeeder::class,
            FeatureTableSeeder::class,
            SocialStratumTableSeeder::class,
            propertyAvailabilitiesTableSeeder::class,
            propertyConditionsTableSeeder::class,
            statePagesTableSeeder::class,
            PublicationGoogleMapsTableSeeder::class,
            CategoryTableSeeder::class,
            CommentTableSeeder::class,
            PropertiesTableSeeder::class
        ]);
    }
    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
    }
}
