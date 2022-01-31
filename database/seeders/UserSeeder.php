<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarioadmin = new User();
        $usuarioadmin->name = 'Carlos';
        $usuarioadmin->lastname = 'Barreda Esparta';
        $usuarioadmin->dni = '78945645';
        $usuarioadmin->email = '70514757@corporacionesparta.edu.pe';
        $usuarioadmin->password = bcrypt('Esparta2022');
        $usuarioadmin->save();
    }
}
