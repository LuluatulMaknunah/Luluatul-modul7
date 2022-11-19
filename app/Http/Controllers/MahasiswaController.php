<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.index')->with([
            'mahasiswa' => Mahasiswa::all(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nim"=>"required|min:12|max:12",
            "nama"=>"required|min:3",
            "email"=>"required|min:9",
            "alamat"=>"required|min:20",
           ]);
           $mahasiswa= new Mahasiswa;
           $mahasiswa->nim=$request->nim;
           $mahasiswa->nama=$request->nama;
           $mahasiswa->email=$request->email;
           $mahasiswa->alamat=$request->alamat;
           $mahasiswa->save();

           return to_route('mahasiswa.index')->with('success','data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     *
     */
    public function edit($id)
    {
        return view('mahasiswa.edit')->with([
            'mahasiswa'=> Mahasiswa::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     *@param \Illuminate\Http\Requests $request
     *@param  int $id
     *@return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "nim"=>"required",
            "nama"=>"required",
            "email"=>"required",
            "alamat"=>"required",
           ]);
           $mahasiswa= Mahasiswa::find($id);
           $mahasiswa->nim=$request->nim;
           $mahasiswa->nama=$request->nama;
           $mahasiswa->email=$request->email;
           $mahasiswa->alamat=$request->alamat;
           $mahasiswa->save();
           return to_route('mahasiswa.index')->with('success','data berhasil di ubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return back()->with('succes','data berhasil dihapus!');
    }
}
