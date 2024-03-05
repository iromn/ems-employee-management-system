<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        $departments = [
            ['name' => 'Human Resources', 'description' => 'Responsible for hiring, training, and managing employees.'],
            ['name' => 'Finance', 'description' => 'Manages financial transactions and reporting.'],
            ['name' => 'Marketing', 'description' => 'Promotes products and services to customers.'],
            ['name' => 'Information Technology', 'description' => 'Manages company technology infrastructure and systems.'],
            ['name' => 'Operations', 'description' => 'Responsible for day-to-day business operations.'],
            ['name' => 'Sales', 'description' => 'Responsible for selling products or services to customers.'],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
