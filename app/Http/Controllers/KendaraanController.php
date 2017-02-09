<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
    	$kendaraans = \App\Kendaraan::all();

    	return view('crud.kendaraan.view', compact('kendaraans'));
    }

    public function create()
    {
    	return view('crud.kendaraan.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    			'nama_kendaraan' => 'required',
    		]);

    	$data = $request->all();

    	$store = \App\Kendaraan::insert($data);

    	return redirect()->back()->with('success');
    }

    public function show($id)
    {
    	$showById = \App\kendaraan::find($id);

    	return view('crud.kendaraan.create', compact('showById'));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    			'nama_kendaraan' => 'required',
    		]);

    	$data = $request->all();

    	$update = \App\Kendaraan::update($data);

    	return redirect()->back()->with('success');
    }

    public function destroy($id)
    {
    	$destroy = \App\Kendaraan::find($id)->delete();

    	return redirect()->back()->with('success');
    }
}
