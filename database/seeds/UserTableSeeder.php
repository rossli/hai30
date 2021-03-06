<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //这里先清空 数据表 数据
        DB::table( 'users' )->truncate();
        //调用 全局的 factiry(),参数: Country 这个模型表,第二个参数是 生成测试数据的数量
        factory(App\User::class,50)->create();
        $this->command->info('UserTableSeeder has been seeded');
    }
}
