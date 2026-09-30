<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->search;
        $parts = Part::when($search, function ($query) use ($search) {
            $query->where('part_number', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
        })->paginate(21);
        return view('home', compact('parts', 'search'));
    }

    public function show($id)
    {
        $part = Part::findOrFail($id);
        return view('detail', compact('part'));
    }
}