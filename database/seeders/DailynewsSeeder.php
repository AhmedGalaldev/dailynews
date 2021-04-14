<?php

namespace Database\Seeders;

use App\Models\Dailynews;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DailynewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dailynews::create([
            'title' => 'title 1',
            'content'=>'content 1 ',
            'rating'=>5,
            'datetime'=>Carbon::parse('Mon, 14 Dec 2020 2:01:59 +0000'),
            'agency_id'=> 1
        ]);  
        Dailynews::create([
            'title' => 'title 2',
            'content'=>'content 2 ',
            'rating'=>9,
            'datetime'=>Carbon::parse('Mon, 14 Dec 2020 14:02:59 +0000'),
            'agency_id'=> 1   
        ]);
        Dailynews::create([
            'title' => 'title 3',
            'content'=>'content 3 ',
            'rating'=>2,
            'datetime'=>Carbon::parse('Mon, 14 Dec 2020 6:04:59 +0000'),
            'agency_id'=> 1
        ]);

        Dailynews::create([
            'title' => 'title 4',
            'content'=>'content 4 ',
            'rating'=>3,
            'datetime'=>Carbon::parse('Mon, 14 Dec 2020 13:01:59 +0000'),
            'agency_id'=> 2
        ]);  
        Dailynews::create([
            'title' => 'title 5',
            'content'=>'content 5 ',
            'rating'=>9,
            'datetime'=>Carbon::parse('Mon, 14 Dec 2020 00:02:59 +0000'),
            'agency_id'=> 2 
        ]);
        Dailynews::create([
            'title' => 'title 6',
            'content'=>'content 6 ',
            'rating'=>6,
            'datetime'=>Carbon::parse('Mon, 14 Dec 2020 0:00:00 +0000'),
            'agency_id'=> 2
        ]);

        Dailynews::create([
            'title' => 'title 7',
            'content'=>'content 7 ',
            'rating'=>6,
            'datetime'=>Carbon::parse('Mon, 14 Dec 2020 08:01:59 +0000'),
            'agency_id'=> 3
        ]);  
        Dailynews::create([
            'title' => 'title 8',
            'content'=>'content 8 ',
            'rating'=>8,
            'datetime'=>Carbon::parse('Mon, 14 Dec 2020 03:02:59 +0000'),
            'agency_id'=> 3  
        ]);
        Dailynews::create([
            'title' => 'title 9',
            'content'=>'content 9 ',
            'rating'=>1,
            'datetime'=>Carbon::parse('Mon, 14 Dec 2020 12:00:00 +0000'),
            'agency_id'=> 3
        ]);
    }
}
