<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Mapel;
use App\Models\TingkatanKelas;
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
        $najur = Mapel::get('jurusan_id');
        return view('admin.mapel.index  ', [
            'mapels' => Mapel::all(),
            'datamapel' => Mapel::get()->count(),
            'jurusans' => Jurusan::all(),
            'tingkatans' => TingkatanKelas::all(),
            'nama_jurusan' => Jurusan::select()->where('jurusan', $najur)->get(),
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
                'jurusan_id' => $value['jurusan_id'],
                'tingkatan_kelas_id' => $value['tingkatan_kelas_id'],
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
