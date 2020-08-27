<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $permissions = [

            'role-list',

            'role-create',

            'role-edit',

            'role-delete',

            'teacher-list',

            'teacher-create',

            'teacher-edit',

            'teacher-delete',

            'student-list',

            'student-create',

            'student-edit',

            'student-delete'


        ];


        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);

        }
        // create roles and assign created permissions

        // or may be done by chaining
        $student = Role::create(['name' => 'student'])
            ->givePermissionTo([
                'student-list',

                'student-create',

                'student-edit',

                'student-delete']);

        $admin = Role::create(['name' => 'admin'])
            ->givePermissionTo([
                'role-list',

                'role-create',

                'role-edit',

                'role-delete',

                'teacher-list',

                'teacher-create',

                'teacher-edit',

                'teacher-delete',

                'student-list',

                'student-create',

                'student-edit',

                'student-delete'
            ]);
    }
}
