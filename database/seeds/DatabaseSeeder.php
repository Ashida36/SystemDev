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
        DB::insert("insert into manages (manage_account,manage_postal,manage_address) values(?,?,?)",[
    '12345678',"123-4567","北海道札幌"
        ]);
    }
}
