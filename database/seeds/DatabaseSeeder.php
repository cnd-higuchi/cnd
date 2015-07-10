<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\SalesData;
use App\User;
use App\TimeCard;

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
        $this->call(TimeCardsTableSeeder::class);
        $this->call(SalesDataTableSeeder::class);

        Model::reguard();
    }
}

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->truncate();
		User::create([
			'name' => 'c-system',
			'email' => 'c-system@cn-door.com',
			'password' => bcrypt('c-system'),
		]);
	}
}

class TimeCardsTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('time_cards')->truncate();

		$faker = Faker::create('ja_JP');

		for ($i = 1; $i < 11; $i++) {
			$bgntime = '2015-7-'.$i.' 9:00:00';
			$endtime = '2015-7-'.$i.' 18:00:00';
			TimeCard::create([
				'user_id' => '2',
				'type' => '1',
				'bgn_time' => $bgntime,
				'end_time' => $endtime,
				'bgn_stamp_time' => $bgntime,
				'end_stamp_time' => $endtime,
			]);
		}
	}
}


class SalesDataTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('sales_data')->truncate();

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
				'fix' => '0',
				'del_flg' => '0',
			]);
		}
	}
}
