<?php

use Illuminate\Database\Seeder;
use App\Spouse;
class SpouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Spouse::create([
           'parent_id' => 1,
            'name' => 'Afaq Ahmed',
            'age' => 55,
            'status' => 1
        ]);

        Spouse::create([
            'parent_id' => 2,
            'name' => 'Farhanah',
            'age' => 53,
            'status' => 1
        ]);

        Spouse::create([
            'parent_id' => 3,
            'name' => 'Munirah',
            'age' => 51,
            'status' => 1
        ]);

        Spouse::create([
            'parent_id' => 4,
            'name' => 'Rizwana',
            'age' => 49,
            'status' => 1
        ]);

        Spouse::create([
            'parent_id' => 5,
            'name' => 'Siti Zaitun',
            'age' => 45,
            'status' => 1
        ]);

        Spouse::create([
            'parent_id' => 6,
            'name' => 'Fitri',
            'age' => 43,
            'status' => 1
        ]);

        Spouse::create([
            'parent_id' => 7,
            'name' => 'Zalina',
            'age' => 45,
            'status' => 1
        ]);

        Spouse::create([
            'parent_id' => 8,
            'name' => 'Zainurul Izwan',
            'age' => 40,
            'status' => 1
        ]);

        Spouse::create([
            'parent_id' => 9,
            'name' => 'Ateeka',
            'age' => 39,
            'status' => 1
        ]);

        Spouse::create([
            'parent_id' => 10,
            'name' => 'Rafidah',
            'age' => 33,
            'status' => 1
        ]);
    }

}
