<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Leblanc's Blog",
            'address' => 'Japan, Tokyo',
            'contact_number' => '8 900 7652 4844',
            'contact_email' => 'info@leblanc.com'
        ]);
    }
} 
