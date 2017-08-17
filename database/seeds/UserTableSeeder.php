<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =array(
        		[
        		'name'    => 'Gabo',
        		'last_name' => 'Paz',
        		'email' 	=> 'srgabo13@gmail.com',
        		'user'		=> 'srgabo13',
        		'password' 	=> \Hash::make('123456'),
        		'type'		=> 'admin',
        		'active'	=> 1,
        		'address' 	=> 'Caminos de la lagunita etapa 3',
        		'created_at'=> new DateTime,
        		'updated_at'=> new DateTime
        ],
        [
        		'name'    	=> 'Gabriela',
        		'last_name' => 'Paz',
        		'email' 	=> 'fruttyfiestasca@gmail.com',
        		'user'		=> 'frutty',
        		'password' 	=> \Hash::make('123456'),
        		'type'		=> 'user',
        		'active'	=> 1,
        		'address' 	=> 'La limpia',
        		'created_at'=> new DateTime,
        		'updated_at'=> new DateTime
        	],
        );

        User::insert($data);
    }
}
