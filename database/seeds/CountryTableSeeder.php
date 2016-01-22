<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //调用 全局的 factiry(),参数: Country 这个模型表,第二个参数是 生成测试数据的数量
        factory(App\Country::class,50)->create();
    }
}
