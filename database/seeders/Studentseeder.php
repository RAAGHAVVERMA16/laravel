<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class Studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Student::create([
            'name'=>'Rahul raghvendra',
            'email'=> 'rs123@gmail.com',
            'class'=>'8',
            'section'=>'A',
            'gender'=>'male']);
    }
}
