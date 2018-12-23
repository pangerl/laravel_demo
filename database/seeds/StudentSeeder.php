<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->delete();

        for ($i=0; $i < 6; $i++) {
            \App\Student::create([
                'name'   => 'hxj '.$i,
                'age'    => 18 + $i,
                'sex' => '20',
            ]);
        }
    }
}
