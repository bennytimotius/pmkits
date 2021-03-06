<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(MahasiswaTableSeeder::class);
         $this->call(DosenkaryawanTableSeeder::class);
         $this->call(AlumniTableSeeder::class);
         $this->call(PDSeeder::class);
         $this->call(PJSeeder::class);
    }
}
