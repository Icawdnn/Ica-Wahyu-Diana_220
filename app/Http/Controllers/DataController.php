<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.datas.index',[
            'datas' => Data::All()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.datas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'jeniskelamin' => 'required',
            'umur' => 'required'
        ]);

        Data::create($validatedData);

        return redirect('/master/datas')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data )
    {
        return view('dashboard.datas.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('dashboard.datas.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'jeniskelamin' => 'required',
            'umur' => 'required'
        ]);

        Data::where('id', $data->id)->update($validatedData);
        return redirect('/master/datas')->with('success', 'Data has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        Data::destroy($data->id);

        return redirect('/master/datas')->with('success', 'Data has been deleted!');
    }
}
