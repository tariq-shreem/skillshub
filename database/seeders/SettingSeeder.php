<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'email'=>'contact@skillshub.com',
            'phone'=>'0592100103',
            'facebook'=>'http://www.facebook.com',
            'twitter'=>'http://www.twitter.com',
            'instagram'=>'http://www.instagram.com',
            'youtube'=>'http://www.youtube.com',
            'linkedin'=>'http://www.linkedin.com',
            'google'=>'https://one.google.com/',
        ]);
    }
}
