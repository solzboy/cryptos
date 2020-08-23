<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

                Permission::create(['name' => 'users_manage']);
                Permission::create(['name' => 'permission_manage']);
                Permission::create(['name' => 'user_management_access']);
                Permission::create(['name' => 'user_dashboard']);
                Permission::create(['name' => 'admin_dashboard']);

    }
}
