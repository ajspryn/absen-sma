<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class PengaturanmapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mapel.index  ', [
            'mapels' => Mapel::all(),
            'datamapel' => Mapel::get()->count(),
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
        foreach ($request->mapel as $key => $value) {
            Mapel::create([
                'mata_pelajaran' => $value['mata_pelajaran'],
                'jurusan' => $value['jurusan'],
                'tingkatan_kelas' => $value['tingkatan_kelas'],
            ]);
        }

        return redirect('/pengaturanmapel')->with('success', 'mapel berhasil ditambah');
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
        //
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
            'mata_pelajaran' => 'required',
            'jurusan' => 'required',
            'tingkatan_kelas' => 'required',

        ];
        $input = $request->validate($rules);

        Mapel::where('id', $id)->update($input);
        return redirect('/pengaturanmapel')->with('success', 'Password berhasil diubah');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mapel::destroy('id', $id);
        return redirect('/pengaturanmapel')->with('success', 'Data Berhasil Di hapus');
    }
}
