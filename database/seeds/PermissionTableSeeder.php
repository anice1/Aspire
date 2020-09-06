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

            'student-delete',

            'admin-list',

            'admin-create',

            'admin-edit',

            'admin-delete',

            // Teachers

            'create-course',

            'list-course',

            'update-course',

            'delete-course',

            'create-assignment',

            'list-assignment',

            'update-assignment',

            'delete-assignment',

            

        ];


        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);

        }
        // create roles and assign created permissions

        // or may be done by chaining
        $admin = Role::create(['name' => 'admin'])
            ->givePermissionTo([
                'admin-list',

                'admin-create',

                'admin-edit',

                'admin-delete']);
                
        $student = Role::create(['name' => 'student'])
            ->givePermissionTo([
                'student-list',

                'student-create',

                'student-edit',

                'student-delete']);

        $school = Role::create(['name' => 'school'])
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

        $teacher = Role::create(['name'=>'teacher'])->givePermissionTo([
            'student-list',
            
            'create-course',

            'list-course',

            'update-course',

            'delete-course',

            'create-assignment',

            'list-assignment',

            'update-assignment',

            'delete-assignment',

        ]);
    }
}
