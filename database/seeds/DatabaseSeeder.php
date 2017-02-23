<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Client;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ClientsSeeder::class);
    }
}
class ClientsSeeder extends Seeder
{
    public function run()
    {
        DB::table('Clients')->delete();
        Client::create([
            'name'=>'Roman',
            'surname'=>'Zherebko',
            'phone'=>'0996476763'
        ]);
        Client::create([
            'name'=>'Galina',
            'surname'=>'Kulil',
            'phone'=>'0996476763'
        ]);
        Client::create([
            'name'=>'Roman',
            'surname'=>'Zubovsky',
            'phone'=>'0987554487'
        ]);
        Client::create([
            'name'=>'Dasha',
            'surname'=>'Gavrilenko',
            'phone'=>'0996896189'
        ]);
        Client::create([
            'name'=>'Dasha',
            'surname'=>'Tkachenko',
            'phone'=>'0668766852'
        ]);
    }
}