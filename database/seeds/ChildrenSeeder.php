<?php

use Illuminate\Database\Seeder;
use App\Children;
class ChildrenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Children::create([
            'parent_id' => 1,
            'spouse_id' => 1,
            'name' => 'Muaz',
            'age' => 26,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 1,
            'spouse_id' => 1,
            'name' => 'Farhanah',
            'age' => 25,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 1,
            'spouse_id' => 1,
            'name' => 'Sajidah',
            'age' => 16,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 1,
            'spouse_id' => 1,
            'name' => 'Sabihah',
            'age' => 13,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 2,
            'spouse_id' => 2,
            'name' => 'Saffiya',
            'age' => 17,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 2,
            'spouse_id' => 2,
            'name' => 'Imran',
            'age' => 17,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 2,
            'spouse_id' => 2,
            'name' => 'Nadia',
            'age' => 17,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 3,
            'spouse_id' => 3,
            'name' => 'Mustaqim',
            'age' => 16,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 3,
            'spouse_id' => 3,
            'name' => 'Myssara',
            'age' => 16,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 4,
            'spouse_id' => 4,
            'name' => 'Qayyum',
            'age' => 15,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 4,
            'spouse_id' => 4,
            'name' => 'Aulia',
            'age' => 11,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 4,
            'spouse_id' => 4,
            'name' => 'Fateh',
            'age' => 6,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 4,
            'spouse_id' => 4,
            'name' => 'Riziq',
            'age' => 4,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 5,
            'spouse_id' => 5,
            'name' => 'Ameerul',
            'age' => 9,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 5,
            'spouse_id' => 5,
            'name' => 'Azeezul',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 5,
            'spouse_id' => 5,
            'name' => 'Afequl',
            'age' => 11,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 6,
            'spouse_id' => 6,
            'name' => 'Hazim',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 6,
            'spouse_id' => 6,
            'name' => 'Auni',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 6,
            'spouse_id' => 6,
            'name' => 'Alisya',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 6,
            'spouse_id' => 6,
            'name' => 'Aliya Hana',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 6,
            'spouse_id' => 6,
            'name' => 'Aaa',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 7,
            'spouse_id' => 7,
            'name' => 'Zharif',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 7,
            'spouse_id' => 7,
            'name' => 'Zhafri',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 7,
            'spouse_id' => 7,
            'name' => 'Zara',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 8,
            'spouse_id' => 8,
            'name' => 'Aqil',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 8,
            'spouse_id' => 8,
            'name' => 'Irdina',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 8,
            'spouse_id' => 8,
            'name' => 'Irdini',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 9,
            'spouse_id' => 9,
            'name' => 'Fateema',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 9,
            'spouse_id' => 9,
            'name' => 'Khadeeja',
            'age' => 8,
            'status' => 1
        ]);

        Children::create([
            'parent_id' => 10,
            'spouse_id' => 10,
            'name' => 'Aina',
            'age' => 4,
            'status' => 1
        ]);
    }
}
