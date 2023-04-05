<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::create([ 'role_name' => 'traveller', ]);
        \App\Models\Role::create([ 'role_name' => 'admin', ]);
        $admin = new \App\Models\User([
            'first_name' => "Jack",
            'last_name' => "Smith",
            'phone_no' => "02132332323",
            'email' => "Admin@TourBook",
            'password' => bcrypt("1234"),
        ]);
        $admin->save();
        \App\Models\Role_user::create([
            'user_id' => $admin->id,
            'role_id' => \App\Models\Role::where('role_name', 'admin')->first()['id'],
        ]);
    }
}
