<?php

namespace App\Imports;

use App\Models\Part;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PartsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        if (empty($row['part_number'])) {
            return null;
        }

        return new Part([
            'part_number' => $row['part_number'],
            'description' => $row['description'] ?? null,
        ]);
    }
}