<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* Model::unguard();

        $this->call(UserTableSeeder::class);

        Model::reguard();*/

          DB::table('users')->insert([
            'codigo_usuario' => '16285258',
            'name' => 'José Luis',
            'email' => 'jldurancastro@gmail.com',
            'password' => bcrypt('admin123'),
            'apellido_paterno' => 'Durán',
            'apellido_materno' => 'Castro',
            'rut_usuario' => '16285258-2',
        ]);
    
    }
}
