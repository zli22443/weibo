<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(User::class)->times(55)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());
        $user = User::find(1);
        $user->name = 'zli22443';
        $user->email = 'zli22443@gmail.com';
        $user->is_admin = 1;
        $user->save();
    }
}
