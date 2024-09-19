<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kelas::all();
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
        if ($request->hasFile('gambar')) {

            $imgName =  $request->file('gambar')->getClientOriginalName();
            $request->gambar->move(public_path('images/villa'), $imgName);
            $data['gambar'] = $imgName;
        }
        Kelas::create(attributes: $data);
        return redirect()->route('');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kelas::find($id);

        return view('', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $req = $request->all();
        $data = Kelas::find($request->id);
        if ($request->hasFile('gambar')) {

            $imgName =  $request->file('gambar')->getClientOriginalName();
            $request->gambar->move(public_path('images/villa'), $imgName);
            $req['gambar'] = $imgName;
        } else {
            $req['gambar'] = $request->gambarLama;
        }

        $data->update($req);

        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Kelas::findOrFail($id);
        $data->delete();
        return redirect()->route('index.villa');
    }
}
