<?php

use Illuminate\Database\Seeder;
use App\Entities\User;
class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name'=>'x',
          'email'=>'x@gmail.com',
          'password'=>bcrypt('123456x'),
          'id_role'=>1

        ]);
    }
}
