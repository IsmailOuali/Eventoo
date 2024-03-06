<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' => 'TestAdmin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('Root12345'),
                'role' => 'admin'
            ],
            [
                'name' => 'TestOrganisateur',
                'email' => 'Organisateur@gmail.com',
                'password' => bcrypt('Root12345'),
                'role' => 'Organisateur'
            ],
            [
                'name' => 'TestAdmin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('Root12345'),
                'role' => 'admin'
            ],

        );
    }
}
