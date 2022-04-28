<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $param =[
        'content' => 'りんご',
    ];
    DB::table('todos')->insert($param);

    $param =[
        'content' => 'なし',
    ];
    DB::table('todos')->insert($param);

    $param =[
        'content' => 'みかん',
    ];
    DB::table('todos')->insert($param);

    $param =[
        'content' => 'もも',
    ];
    DB::table('todos')->insert($param);
    }
}
