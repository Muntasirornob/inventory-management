<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Permission as ModelsPermission;

use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//role create 

$superAdminRole = Role::create(['name'=>'Super_admin']);
$admin = Role::create(['name'=>'admin']);
$manager = Role::create(['name'=>'Manager']);




        $permissions= [
            "admin.createPdf",
        //admin permission
           "admin.create",
           "admin.update",
           "admin.delete",
           "admin.view",

        //user permission       
           "user.create",
           "user.update",
           "user.delete",
           "user.view",
           //product permission
           "product.create",
           "product.update",
           "product.delete",
           "product.view"
          










        ];

        for ($i=0; $i <count($permissions) ; $i++) { 
            $permission = ModelsPermission::create(['name' => $permissions[$i]]);
            $superAdminRole->givePermissionTo($permission);
        }
    }
}
