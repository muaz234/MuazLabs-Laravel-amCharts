<?php

use Illuminate\Database\Seeder;
use App\Parents;
class ParentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Parents::create([
            'id' => 1,
            'name' => 'Habsah',
            'age' => 55 ,
            'birth_date' => '1970-01-01',
            'location' => 'Kedah',
            'status' => 1,
        ]);

        Parents::create([
            'id' => 2,
            'name' => 'Habib',
            'age' => 53 ,
            'birth_date' => '1970-01-01',
            'location' => 'Pulau Pinang',
            'status' => 1,
        ]);

        Parents::create([
            'id' => 3,
            'name' => 'Mujib',
            'age' => 51 ,
            'birth_date' => '1970-01-01',
            'location' => 'Kuala Lumpur',
            'status' => 1,
        ]);

        Parents::create([
            'id' => 4,
            'name' => 'Anisu',
            'age' => 49 ,
            'birth_date' => '1970-01-01',
            'location' => 'Kedah',
            'status' => 1,
        ]);

        Parents::create([
            'id' => 5,
            'name' => 'Amy',
            'age' => 47 ,
            'birth_date' => '1970-01-01',
            'location' => 'Kuala Lumpur',
            'status' => 1,
        ]);

        Parents::create([
            'id' => 6,
            'name' => 'Nafisah',
            'age' => 45 ,
            'birth_date' => '1970-01-01',
            'location' => 'Pulau Pinang',
            'status' => 1,
        ]);



        Parents::create([
            'id' => 7,
            'name' => 'Atan',
            'age' => 43 ,
            'birth_date' => '1970-01-01',
            'location' => 'Kuala Lumpur',
            'status' => 1,
        ]);

        Parents::create([
            'id' => 8,
            'name' => 'Hanisah',
            'age' => 45 ,
            'birth_date' => '1970-01-01',
            'location' => 'Negeri Sembilan',
            'status' => 1,
        ]);

        Parents::create([
            'id' => 9,
            'name' => 'Atiqu',
            'age' => 45 ,
            'birth_date' => '1970-01-01',
            'location' => 'Qatar',
            'status' => 1,
        ]);

        Parents::create([
            'id' => 10,
            'name' => 'Kabiru',
            'age' => 45 ,
            'birth_date' => '1970-01-01',
            'location' => 'Kedah',
            'status' => 1,
        ]);
    }
}
