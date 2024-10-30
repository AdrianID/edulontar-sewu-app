<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Packages::all();
        return view('packages.index', compact('packages'));
    }

    public function create()
    {
        return view('packages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        Packages::create($validatedData);
        return redirect()->route('packages.index')->with('success', 'Package created successfully.');
    }

    public function show(Packages $package)
    {
        return view('packages.show', compact('package'));
    }

    public function edit(Packages $package)
    {
        return view('packages.edit', compact('package'));
    }

    public function update(Request $request, Packages $package)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        $package->update($validatedData);
        return redirect()->route('packages.index')->with('success', 'Package updated successfully.');
    }

    public function destroy(Packages $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'Package deleted successfully.');
    }
}
