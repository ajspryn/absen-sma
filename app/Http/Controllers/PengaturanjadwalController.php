<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Jurusan;
use App\Models\JadwalMapel;
use Illuminate\Http\Request;
use App\Models\TingkatanKelas;
use Illuminate\Support\Facades\Auth;

class PengaturanjadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jadwal.index', [
            'mapels' => Mapel::all(),

            'gurus' => Auth::user()::select()->where('key', 'guru86')->get(),
            'jurusans' => Jurusan::all(),
            'tingkatans' => TingkatanKelas::all(),
            'kelass' => Kelas::all(),
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
        return $request;
        foreach ($request->jadwalmapel as $key => $value) {
            JadwalMapel::create([
                'hari' => $value['hari'],
                'jam_mulai' => $value['jam_mulai'],
                'jam_akhir' => $value['jam_akhir'],
                'jurusan_id' => $value['jurusan_id'],
                'tingkatan_kelas_id' => $value['tingkatan_kelas_id'],
                'kelas_id' => $value['kelas_id'],
                'mapel_id' => $value['mapel_id'],
                'user_id' => $value['user_id'],
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
        //
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
