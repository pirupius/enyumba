<?php

use App\Models\Flyer;
use Illuminate\Database\Seeder;

class FlyersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flyer::create(
            [
                'user_id' => 1,
                'name' => '3 bedroom house for rent',
                'area' => 'Najjera',
                'address' => 'Kiira Road',
                'district' => 'Kampala',
                'price' => '450000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ]
        );

        Flyer::create(
            [
                'user_id' => 1,
                'name' => '2 Bedroom Penthouse for rent',
                'area' => 'Kamyokya',
                'address' => '64 Accacia Avenue',
                'district' => 'Kampala',
                'price' => '1500000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ]
        );

        Flyer::create(
            [
                'user_id' => 2,
                'name' => 'Presidential suite',
                'area' => 'Kajjansi',
                'address' => 'Entebbe Road',
                'district' => 'Wakiso',
                'price' => '750000',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ]
        );
    }
}
