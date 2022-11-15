<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'user_id' => 5,
                'username' => 'demo',
                'fname' => 'Demo',
                'lname' => '0',
                'email' => 'demo@unifysofttech.com',
                'mobile' => '7878787878',
                'gender' => 'f',
                'bio' => NULL,
                'user_dp' => 'QwoYKLxOwu7Su3yMdED5JfeikGL4PkZlxtMqYE2b.jpg',
                'password' => '$2y$10$cawJ9CPDiHpylmSTLQIlv.einZ/NHoz8Y9psPxNkHkRy118KqfyC2',
                'dob' => '0000-00-00',
                'country' => '',
                'languages' => '',
                'app_token' => '',
                'login_type' => 'O',
                'time_zone' => '',
                'player_id' => '',
                'ios_uuid' => '',
                'verification_code' => '',
                'verification_time' => NULL,
                'active' => 1,
                'deleted' => 0,
                'last_active' => NULL,
                'created_at' => '2020-12-09 13:08:30',
                'updated_at' => '2022-06-07 12:38:30',
                'email_verified' => 1,
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'remember_token' => NULL,
                'eula_agree' => 0,
                'fcm_token' => '',
                'chat_with' => 'FW',
            ),
            1 => 
            array (
                'user_id' => 6,
                'username' => 'demo1',
                'fname' => 'Demo',
                'lname' => '1',
                'email' => 'demo1@unifysofttech.com',
                'mobile' => '7878787878',
                'gender' => 'm',
                'bio' => NULL,
                'user_dp' => 'S7MHjsXaCwVF8a9CTMijKahv0qwPwlRRWZMPN7lg.jpg',
                'password' => '$2y$10$JtNAK3/P3k4389kMUYY6c.yaSNhsN0H6J0XhdZNY75jgpDs12Xz2i',
                'dob' => '0000-00-00',
                'country' => '',
                'languages' => '',
                'app_token' => '',
                'login_type' => 'O',
                'time_zone' => '',
                'player_id' => '',
                'ios_uuid' => '',
                'verification_code' => '',
                'verification_time' => NULL,
                'active' => 1,
                'deleted' => 0,
                'last_active' => NULL,
                'created_at' => '2020-12-09 13:09:43',
                'updated_at' => '2022-06-07 12:37:26',
                'email_verified' => 1,
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'remember_token' => NULL,
                'eula_agree' => 0,
                'fcm_token' => '',
                'chat_with' => 'FW',
            ),
            2 => 
            array (
                'user_id' => 7,
                'username' => 'demo2',
                'fname' => 'Demo',
                'lname' => '2',
                'email' => 'demo2@unifysofttech.com',
                'mobile' => '7878787878',
                'gender' => 'm',
                'bio' => NULL,
                'user_dp' => 'mrrZavVrcvHl7HQtGc0woszDrvkXjbwOxJk7Swmj.jpg',
                'password' => '$2y$10$uY8Tl88U4BAHxBmBbBoK6uDL2bLOQjcsOxSt2x0CkTTV2CK.Oo5hq',
                'dob' => '0000-00-00',
                'country' => '',
                'languages' => '',
                'app_token' => '',
                'login_type' => 'O',
                'time_zone' => '',
                'player_id' => '',
                'ios_uuid' => '',
                'verification_code' => '',
                'verification_time' => NULL,
                'active' => 1,
                'deleted' => 0,
                'last_active' => NULL,
                'created_at' => '2020-12-09 13:10:45',
                'updated_at' => '2022-06-07 12:36:25',
                'email_verified' => 1,
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'remember_token' => NULL,
                'eula_agree' => 0,
                'fcm_token' => '',
                'chat_with' => 'FW',
            ),
            3 => 
            array (
                'user_id' => 8,
                'username' => 'demo3',
                'fname' => 'Demo',
                'lname' => '3',
                'email' => 'demo3@unifysofttech.com',
                'mobile' => '7878787878',
                'gender' => 'm',
                'bio' => NULL,
                'user_dp' => '7RN6z3pDc4EdnJKqELfDfIVR6WytOyymb3lbPCga.jpg',
                'password' => '$2y$10$njXb24EZlH8vZXYKAL1FR./bMCovXJheyd4syu9D2ExY3v.ChjrxO',
                'dob' => '0000-00-00',
                'country' => '',
                'languages' => '',
                'app_token' => '',
                'login_type' => 'O',
                'time_zone' => '',
                'player_id' => '',
                'ios_uuid' => '',
                'verification_code' => '',
                'verification_time' => NULL,
                'active' => 1,
                'deleted' => 0,
                'last_active' => NULL,
                'created_at' => '2020-12-09 13:11:40',
                'updated_at' => '2022-06-07 12:49:12',
                'email_verified' => 1,
                'active_status' => 0,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
                'remember_token' => NULL,
                'eula_agree' => 0,
                'fcm_token' => '',
                'chat_with' => 'FW',
            ),
        ));
        
        
    }
}