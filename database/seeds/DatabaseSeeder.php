<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(LessonsTableSeeder::class);// $this->call(UsersTableSeeder::class);
       $this->call(FieldsTableSeeder::class);
       $this->call(Subject_groupsTableSeeder::class);
       $this->call(Time_tablesTableSeeder::class);
       $this->call(NotesTableSeeder::class);
       $this->call(UsersTableSeeder::class);
       $this->call(User_lessonsTableSeeder::class);
    }
}
