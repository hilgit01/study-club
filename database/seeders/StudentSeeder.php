<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            "nim"       =>"F1E123005",
            "name"      => "Hilmy Anandika Indra",
            "prodi"     => "Sistem Informasi",
            "angkatan"  => 2023,
            "alamat"    => "Mendalo Asri",
        ]);

        for ($i = 0; $i < 10; $i++) {
            Student::create([
                "nim"=> "F1E1230$i",
                "name"=> "ke-$i",
                "prodi"=> "Sistem Informasi",
                "angkatan"=> 2000 + $i,
                "alamat"=> "basenglah",
            ]);

        Student::create([
            "nim"       =>"F1E123005",
            "name"      => "Hilmy Anandika Indra",
            "prodi"     => "Sistem Informasi",
            "angkatan"  => 2023,
            "alamat"    => "Mendalo Asri",
        ]);

        Student::create([
            "nim"       => Str::random(10),
            "name"      => Str::random(10),
            "prodi"     => Str::random(10),
            "angkatan"  => rand(2000,2024),
            "alamat"    => Str::random(10),
        ]);
        }}
}