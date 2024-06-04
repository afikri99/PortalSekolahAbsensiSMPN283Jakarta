<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->where('id',1)->update([
            'password' => Hash::make('admin'),
        ]);
    }
}
