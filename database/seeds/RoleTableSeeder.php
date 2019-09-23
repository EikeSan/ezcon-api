<?php

use Illuminate\Database\Seeder;
use App\Models\Role\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'name'=> 'admin',
            'description'=> 'Administrator',
        ]);
        Role::firstOrCreate([
            'name'=> 'employee',
            'description'=> 'Employee',
        ]);
        Role::firstOrCreate([
            'name'=> 'resident',
            'description'=> 'Resident',
        ]);
        Role::firstOrCreate([
            'name'=> 'syndic',
            'description'=> 'Syndic',
        ]);
    }
}
