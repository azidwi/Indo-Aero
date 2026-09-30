<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PartsImport;
use App\Models\Part;

class PartsSeeder extends Seeder
{
    public function run(): void
    {
        Part::truncate();

        Excel::import(
            new PartsImport,
            storage_path('app/inventory.xlsx')
        );
    }
}