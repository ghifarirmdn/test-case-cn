<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();

        return view('index', compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function insert(Request $request)
    {
        $data = Pegawai::create($request->all());
        if($request->hasFile('photo')){
            $request->file('photo')->move('photo/', $request->file('photo')->getClientOriginalName());
            $data->photo = $request->file('photo')->getClientOriginalName();
            $data->save();
        }

        return redirect('/');
    }

    public function edit($id)
    {
        $data = Pegawai::find($id);
        // dd($data);

        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pegawai::find($id);
        if($request->hasFile('photo')){
            $request->file('photo')->move('photo/', $request->file('photo')->getClientOriginalName());
            $data->photo = $request->file('photo')->getClientOriginalName();
            $data->save();
        }
        $data->update($request->all());

        return redirect('/');
    }

    public function delete($id)
    {
        $data = Pegawai::find($id);
        $data->delete();

        return redirect('/');
    }
}
