<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users2')->insert(
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'address' => Str::random(10)
            ]
            );
    }
}
