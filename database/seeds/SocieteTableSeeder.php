<?php
use App\societe;
use App\User;
use Illuminate\Database\Seeder;

class SocieteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(societe::class, 10)->create();
    }
}
