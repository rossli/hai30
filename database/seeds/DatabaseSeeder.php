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
        Model::unguard();

        //调用额外的填充器,想填充哪个调哪个
        //其实如果不想分那么细的话,完全可以在这里 直接使用 全局factory()方法
        $this->call(TestTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
