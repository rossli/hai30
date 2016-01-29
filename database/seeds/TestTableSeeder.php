<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //这里先清空 数据表 数据
        DB::table( 'tests' )->truncate();
        //调用 全局的 factiry(),参数是Test 这个模型表,第二个参数是 生成测试数据的数量
        factory(App\Test::class,10)->create();
        $this->command->info('TestTableSeeder has been seeded');
    }
}
