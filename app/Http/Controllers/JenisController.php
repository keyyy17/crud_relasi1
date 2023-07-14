<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;//add  Model - Data is coming from the database via Model.

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = Jenis::all();
        return view ('jenis.index')->with('jenis',$jenis);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis = Jenis::all();
        return view('jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =$request->all();
        Jenis::create($input);

        return redirect('jenis')->with('flash_message', 'Jenis Addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.show')->with('jenis', $jenis);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response 
     */
    public function edit(string $id)
    {
        $jenis = Jenis::find($id);
        return view('jenis_buku.edit')->with('jenis', $jenis);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $jenis = Jenis::find($id);
        $input =$request->all();
        $jenis->update($input);
        return redirect('jenis')->with('flash_message', 'jenis Updated!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Jenis::destroy($id);
        return redirect('jenis')->with('flash_message', 'jenis deleted!');
    }
}
