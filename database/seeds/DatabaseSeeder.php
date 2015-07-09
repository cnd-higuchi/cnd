<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\SalesData;
use App\User;

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

        $this->call(UsersTableSeeder::class);
        $this->call(SalesDataTableSeeder::class);

        Model::reguard();
    }
}

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		User::create([
			'name' => 'c-system',
			'email' => 'c-system@cn-door.com',
			'password' => bcrypt('c-system'),
		]);
	}
}

class SalesDataTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('sales_data')->delete();

		$faker = Faker::create('ja_JP');

		for ($i = 0; $i < 10; $i++) {
			SalesData::create([
				'user_id' => '1',
				'sales_date' => $faker->dateTime(),
				'client_name' => $faker->firstname(),
				'status' => $faker->randomElement(['1','2','3','4']),
				'project_name' => $faker->lastname(),
				'sales' => 10000*($i+1),
				'suppliers' => 1000*($i+1),
				'gross_profit' => 9000*($i+1),
				'fix' => '0',
				'del_flg' => '0',
			]);
		}
	}
}
