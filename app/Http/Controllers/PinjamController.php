<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjam;//add Pinjam Model - Data is coming from the database via Model.

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjam = Pinjam::all();
        return view ('pinjam.index')->with('pinjam',$pinjam);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pinjam.create');
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
        Pinjam::create($input);

        return redirect('pinjam')->with('flash_message', 'Pinjam Addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pinjam = Pinjam::find($id);
        return view('pinjam.show')->with('pinjam', $pinjam);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response 
     */
    public function edit(string $id)
    {
        $pinjam = Pinjam::find($id);
        return view('pinjam.edit')->with('pinjam', $pinjam);
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
        $pinjam = Pinjam::find($id);
        $input =$request->all();
        $pinjam->update($input);
        return redirect('pinjam')->with('flash_message', 'pinjam Updated!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Pinjam::destroy($id);
        return redirect('pinjam')->with('flash_message', 'Pinjam deleted!');

    }
}
