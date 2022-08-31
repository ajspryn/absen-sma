<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class TambahsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.siswa.TambahSiswa', [
            'siswas' => Siswa::all()->last(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nis_siswa' => 'required',
            'nisn_siswa' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan_siswa' => 'required',
            'tingkatan_kelas' => 'required',
            'kelas_siswa' => 'required',
        ]);
        $input = $validatedData;
        Siswa::create($input);
        return redirect()->back()->with('success', 'Data siswa telah diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.siswa.EditSiswa', [
            'siswa' => Siswa::select()->where('id', $id)->get()->first(),
            'siswas' => Siswa::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nis_siswa' => 'required',
            'nisn_siswa' => 'required',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan_siswa' => 'required',
            'tingkatan_kelas' => 'required',
            'kelas_siswa' => 'required',
        ];
        $input = $request->validate($rules);

        Siswa::where('id', $id)->update($input);
        return redirect('/pengaturansiswa')->with('success', 'Data siswa Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
