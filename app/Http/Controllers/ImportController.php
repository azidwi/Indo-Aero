<?php

namespace App\Http\Controllers;

use App\Imports\PartsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        return view('import');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);
        Excel::import(new PartsImport, $request->file('file'));
        return back()->with('success', 'Import berhasil');
    }
}