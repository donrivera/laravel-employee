<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
                                        'firstname'     => 'Don',
                                        'lastname'      => 'Rivera',
                                        'address'       => 'Pandacan,Manila',
                                        'postcode'      => '1001',
                                        'contact'       => '5648063',
                                        'username'      => 'Par',
                                        'email'         => 'don.par.rivera@gmail.com',
                                        'password'      => bcrypt('secret'),
        ]);
    }
}
