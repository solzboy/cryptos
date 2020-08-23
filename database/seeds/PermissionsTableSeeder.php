<?php

use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'name' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'name' => 'permission_create',
            ],
            [
                'id'    => '3',
                'name' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'name' => 'permission_show',
            ],
            [
                'id'    => '5',
                'name' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'name' => 'permission_access',
            ],
            [
                'id'    => '7',
                'name' => 'role_create',
            ],
            [
                'id'    => '8',
                'name' => 'role_edit',
            ],
            [
                'id'    => '9',
                'name' => 'role_show',
            ],
            [
                'id'    => '10',
                'name' => 'role_delete',
            ],
            [
                'id'    => '11',
                'name' => 'role_access',
            ],
            [
                'id'    => '12',
                'name' => 'user_create',
            ],
            [
                'id'    => '13',
                'name' => 'user_edit',
            ],
            [
                'id'    => '14',
                'name' => 'user_show',
            ],
            [
                'id'    => '15',
                'name' => 'user_delete',
            ],
            [
                'id'    => '16',
                'name' => 'user_access',
            ],
            [
                'id'    => '17',
                'name' => 'expense_management_access',
            ],
            [
                'id'    => '18',
                'name' => 'expense_category_create',
            ],
            [
                'id'    => '19',
                'name' => 'expense_category_edit',
            ],
            [
                'id'    => '20',
                'name' => 'expense_category_show',
            ],
            [
                'id'    => '21',
                'name' => 'expense_category_delete',
            ],
            [
                'id'    => '22',
                'name' => 'expense_category_access',
            ],
            [
                'id'    => '23',
                'name' => 'income_category_create',
            ],
            [
                'id'    => '24',
                'name' => 'income_category_edit',
            ],
            [
                'id'    => '25',
                'name' => 'income_category_show',
            ],
            [
                'id'    => '26',
                'name' => 'income_category_delete',
            ],
            [
                'id'    => '27',
                'name' => 'income_category_access',
            ],
            [
                'id'    => '28',
                'name' => 'expense_create',
            ],
            [
                'id'    => '29',
                'name' => 'expense_edit',
            ],
            [
                'id'    => '30',
                'name' => 'expense_show',
            ],
            [
                'id'    => '31',
                'name' => 'expense_delete',
            ],
            [
                'id'    => '32',
                'name' => 'expense_access',
            ],
            [
                'id'    => '33',
                'name' => 'income_create',
            ],
            [
                'id'    => '34',
                'name' => 'income_edit',
            ],
            [
                'id'    => '35',
                'name' => 'income_show',
            ],
            [
                'id'    => '36',
                'name' => 'income_delete',
            ],
            [
                'id'    => '37',
                'name' => 'income_access',
            ],
            [
                'id'    => '38',
                'name' => 'expense_report_create',
            ],
            [
                'id'    => '39',
                'name' => 'expense_report_edit',
            ],
            [
                'id'    => '40',
                'name' => 'expense_report_show',
            ],
            [
                'id'    => '41',
                'name' => 'expense_report_delete',
            ],
            [
                'id'    => '42',
                'name' => 'expense_report_access',
            ],
            [
                'id'    => '43',
                'name' => 'user_alert_create',
            ],
            [
                'id'    => '44',
                'name' => 'user_alert_show',
            ],
            [
                'id'    => '45',
                'name' => 'user_alert_delete',
            ],
            [
                'id'    => '46',
                'name' => 'user_alert_access',
            ],
            [
                'id'    => '47',
                'name' => 'church_access',
            ],
            [
                'id'    => '48',
                'name' => 'area_create',
            ],
            [
                'id'    => '49',
                'name' => 'area_edit',
            ],
            [
                'id'    => '50',
                'name' => 'area_show',
            ],
            [
                'id'    => '51',
                'name' => 'area_delete',
            ],
            [
                'id'    => '52',
                'name' => 'area_access',
            ],
            [
                'id'    => '53',
                'name' => 'district_create',
            ],
            [
                'id'    => '54',
                'name' => 'district_edit',
            ],
            [
                'id'    => '55',
                'name' => 'district_show',
            ],
            [
                'id'    => '56',
                'name' => 'district_delete',
            ],
            [
                'id'    => '57',
                'name' => 'district_access',
            ],
            [
                'id'    => '58',
                'name' => 'assembly_create',
            ],
            [
                'id'    => '59',
                'name' => 'assembly_edit',
            ],
            [
                'id'    => '60',
                'name' => 'assembly_show',
            ],
            [
                'id'    => '61',
                'name' => 'assembly_delete',
            ],
            [
                'id'    => '62',
                'name' => 'assembly_access',
            ],
            [
                'id'    => '63',
                'name' => 'profile_password_edit',
            ],
        ];

        Permission::create($permissions);
    }
}