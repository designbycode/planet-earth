<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Spatie\Permission\Models\Role;

    class RoleSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {

            $roles = [
                ['name' => 'Super Admin'],
                ['name' => 'Admin'],
                ['name' => 'Manager'],
                ['name' => 'Editor'],
                ['name' => 'Viewer'],
                ['name' => 'Developer'],
            ];
            foreach ($roles as $role) {
                Role::create($role);
            }

        }
    }
