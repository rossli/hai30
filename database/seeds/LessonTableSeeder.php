<?php

use Illuminate\Database\Seeder;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //这里先清空 数据表 数据
        DB::table( 'lessons' )->truncate();

        //调用 全局的 factiry(),参数: Country 这个模型表,第二个参数是 生成测试数据的数量
        factory( App\Lesson::class, 50 )->create();

        //这里 执行完毕 输出相应 的提示信息
        $this->command->info('LessonTableSeeder has been seeded');
    }
}
