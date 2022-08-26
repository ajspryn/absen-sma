<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\TingkatanKelas;
use Illuminate\Http\Request;

class PengaturanSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sekolah.index', [
            'jurusans' => Jurusan::all(),
            'tingkatan_kelass' => TingkatanKelas::all(),
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

        if ($request->tingkatan_kelas == null) {
            if ($request->kelas == null) {
                Jurusan::create([
                    'jurusan' => $request->jurusan,
                ]);
            }
        } elseif ($request->jurusan == null) {

            if ($request->kelas == null) {
                TingkatanKelas::create([
                    'tingkatan_kelas' => $request->tingkatan_kelas,
                ]);
            }
        }
        if ($request->jurusan == null) {

            if ($request->tingakatan_kelas == null) {
                Kelas::create([
                    'kelas' => $request->kelas,
                ]);
            }
        }



        return redirect('/pengaturansekolah')->with('success', 'mapel berhasil ditambah');
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

        Jurusan::destroy('id', $id);
        TingkatanKelas::destroy('id', $id);
        Kelas::destroy('id', $id);
        return redirect('/pengaturansekolah')->with('success', 'Data Berhasil Di hapus');
    }
}