<?php

use Illuminate\Database\Seeder;
use App\AdminModel;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=AdminModel::where('email','mridul@admin.com')->first();
        if (is_null($user)) {
            $user =new AdminModel();
            $user->name="Admin";
            $user->username="admin";
            $user->email="mridul@admin.com";
            $user->password=md5(12345);
            $user->save();
        }
    }
}
