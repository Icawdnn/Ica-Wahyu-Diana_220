<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataApiController extends Controller
{
    public function index() {

        $datas = Data::all();
        return response()->json($datas);
    }

    public function show($id) {
        $data = Data::find($id);
        return response()->json(['message'=>'Success', 'data'=> $data]);
    }

    public function store(Request $request) {

        $data = Data::create($request->all());
        return response()->json(['message'=>'Success', 'data'=> $data]);
    }

    public function update(Request $request, $id) {

        $data = Data::find($id);
        $data->update($request->all());
        return response()->json(['message'=>'Success', 'data'=> $data]);
    }

    public function destroy($id) {
        $data = Data::find($id);
        $data->delete();
        return response()->json(['message'=>'Success', 'data'=> null]);
    }
}