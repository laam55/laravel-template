<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //thực thi lớp UserSeeder tạo dữ liệu mới
        $this->call(UserSeeder::class);
    }
}

class UserSeeder extends seeder{

	public function run()
	{
		$data = array(
        	'username' => 'lam',
            'password' => bcrypt('a'),
            'fullname' => 'Phạm Tùng Lâm',
        );
        DB::table('users')->insert([$data]);
	}
}
