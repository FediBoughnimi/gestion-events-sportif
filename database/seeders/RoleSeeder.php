<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
     public function run()
    {
        //
        $roles=Role::factory(2)->state(new Sequence(
            [
                'nom'=>'Admin',
                'nom'=>'User',
                'nom'=>'Manager'
            ]
        ))->create();
    }
}
