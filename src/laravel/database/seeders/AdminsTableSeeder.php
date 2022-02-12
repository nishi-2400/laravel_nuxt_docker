<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 開発者用アカウント生成
        Admin::create([
            'first_name' => 'John',
            'last_name' => 'Smith',
            'email' => 'test@test.co.jp',
            'email_verified_at' => now(),
            'password' => bcrypt('testtest'),
        ]);

        // テストデータ
        Admin::factory(10)->create();
    }
}
