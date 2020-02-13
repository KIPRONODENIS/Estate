<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

 app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
              // create permissions
        Permission::create(['name' => 'edit service']);
        Permission::create(['name' => 'delete service']);
        Permission::create(['name' => 'create service']);
        Permission::create(['name' => 'update service']); 

                // or may be done by chaining
        $role = Role::create(['name' => 'Vendor'])
            ->givePermissionTo(['edit service', 'delete service','create service','update service']); 
    }
}
