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
        DB::insert("insert into members (member_name,member_kana,member_sex,member_postal,member_address,member_tel,member_birth) values(?,?,?,?,?,?,?)",[
    "hoge","hoge","1","hoge","hoge","hoge",'2000-10-11'
        ]);
    }
}
