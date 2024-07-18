<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\SubjectGrade;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //user::factory(10)->create();
        //Student::factory()->count(30)->create();
        SubjectGrade::factory()->count(50)->create();

        //User::factory()->create([
          //  'name' => 'Test User',
          // 'email' => 'test@example.com',
       // ]);
    }
}
