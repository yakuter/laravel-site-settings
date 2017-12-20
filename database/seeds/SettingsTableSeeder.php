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
        DB::table('settings')->insert(array(
            array('option'=>'Site Name','slug'=>'site_name','value'=>'Laravel Yakuter'),
            array('option'=>'Site Url','slug'=>'site_url','value'=>'https://www.yakuter.com'),
            array('option'=>'Site Description','slug'=>'site_description','value'=>'A programming blog'),
            array('option'=>'Contact Email','slug'=>'contact_email','value'=>'yakuter@gmail.com'),
        ));
    }
}
