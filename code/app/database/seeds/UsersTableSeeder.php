<?php
    class UsersTableSeeder extends Seeder
    {
        public function run()
        {
            $user = new User;
            $user->email = 'test@test.com';
            $user->username='Puppet';
            $user->password=Hash::make('password');
            $user->about='I am a puppet';
            $user->save();
            
            $user = new User;
            $user->email = 'test2@test.com';
            $user->username='Puppy';
            $user->password=Hash::make('password');
            $user->save();
        }
    }
?>