<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $endpoing = 7;
        $subj_id = 0;

        $names = [
            [
                'name' => 'Jemal',
                'surname' => 'Orjonikidze'
            ],
            [
                'name' => 'Ioseb',
                'surname' => 'Jughashvili'
            ],

            [
                'name' => 'Jansul',
                'surname' => 'Charkviani'
            ],
            [
                'name' => 'Ubralod',
                'surname' => 'Madona'
            ],

            [
                'name' => 'Led',
                'surname' => 'Zeppelin'
            ],

            [
                'name' => 'George',
                'surname' => 'Floyd'
            ],

            [
                'name' => 'Konstantine',
                'surname' => 'Gamsaxurdishvili'
            ]


        ];

        while ($endpoing > $subj_id) {


            foreach ($names as $one) {
                $subj_id++;
                $randID = rand(1, 4);
                $lecturer = new Student();
                $lecturer->major_fields_id = rand(1, 5);
                $lecturer->subject_id = $subj_id;
                $lecturer->classes_id = $randID;
                $lecturer->name = $one['name'];
                $lecturer->surname = $one['surname'];
                $lecturer->personal_id = rand(100000000, 999999999);
                $lecturer->phone_number = rand(100000000, 999999999);
                $lecturer->email = $one['name'] . '_' . $one['surname'] . '@sweet.student.com';
                $lecturer->address = 'ragac misamarti';
                $lecturer->address_2 = null;
                $lecturer->number_of_apartment = rand(1, 3);
                $lecturer->date_of_birthday = rand(1999, 2004) . '.' . rand(1, 12) . '.' . rand(1, 28);
                $lecturer->sex = 'female';
                $lecturer->save();
            }


        }


        $randID = rand(1, 4);
        $student = new Student();
        $student->major_fields_id = rand(1, 5);
        $student->subject_id = 1;
        $student->classes_id = $randID;
        $student->name = 'DaviD';
        $student->surname = 'Mindorashvili';
        $student->personal_id = rand(100000000, 999999999);
        $student->phone_number = rand(100000000, 999999999);
        $student->email = 'DaviD_Mindorashvili@sweet.student.com';
        $student->address = 'ragac misamarti';
        $student->address_2 = null;
        $student->number_of_apartment = rand(1, 3);
        $student->date_of_birthday = rand(1999, 2004) . '.' . rand(1, 12) . '.' . rand(1, 28);
        $student->sex = 'female';
        $student->save();

    }
}
