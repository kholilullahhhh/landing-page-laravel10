<?php

namespace App\Http\Controllers;

use App\Models\pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pendaftar::all();
        $no = 1;
        // dd($data);

        return view('', compact('data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        Pendaftar::create($data);
        return redirect()->route('');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pendaftar::findOrFail($id);

        return view('admin.tamu.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pendaftar::findOrFail($id);

        return view('', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $item = Pendaftar::find($request->id);
        // dd($data);
        $item->update($data);

        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pendaftar::findOrFail($id);
        $data->delete();
        return redirect()->route('');
    }
}
