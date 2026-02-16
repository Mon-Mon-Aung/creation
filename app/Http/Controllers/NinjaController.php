<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show(Ninja $ninja) {
        $ninja->load('dojo');
        return view('ninjas.show', ["ninja" => $ninja ]);
    }

    public function create() {
        $dojos = Dojo::all();
        return view('ninjas.create', ["dojos" => $dojos]);
    }

    public function store(Request $request) {
        // -->ninjas/ (POST)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id', //dojos table - id column
        ]);

        try {
            Ninja::create($validated);

            return redirect()
                ->route('ninjas.index')
                ->with('success', 'Ninja created successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to create ninja.');
        }
    }
    public function destroy(Ninja $ninja) {
        $ninja->delete();
        return redirect()->route('ninjas.index');
    }
}
