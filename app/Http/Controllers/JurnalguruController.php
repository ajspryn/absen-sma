<?php

namespace App\Http\Controllers;

use App\Models\Jurnalguru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JurnalguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guru.jurnalguru', [
            'jurnals' => Jurnalguru::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.tambahjurnal');
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
            'judul_jurnal' => 'required',
            'deskripsi' => 'required',
            'nama_guru' => 'required',
            'file_jurnal' => 'required'
        ]);

        if ($request->file('file_jurnal')) {
            $validatedData['file_jurnal'] = $request->file('file_jurnal')->store('lampiran_jurnal');
        }

        Jurnalguru::create($validatedData);

        return redirect('/jurnalguru')->with('success', 'Data berhasil ditambahkan!');
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
        $jurnal = Jurnalguru::find($id);
        return view('guru.editjurnal', compact('jurnal'));
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
            'judul_jurnal' => 'required',
            'deskripsi' => 'required',
            'nama_guru' => 'required',
            'file_jurnal' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('file_jurnal')) {
            if ($request->oldfile_jurnal) {
                Storage::delete($request->oldfile_jurnal);
            }
            $validatedData['file_jurnal'] = $request->file('file_jurnal')->store('lampiran_jurnal');
        }
        $input = $validatedData;
        Jurnalguru::where('id', $id)->update($input);

        return redirect('/jurnalguru')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurnal = Jurnalguru::find($id);
        if ($jurnal->file_jurnal) {
            Storage::delete($jurnal->file_jurnal);
        }
        $jurnal->delete();
        return redirect()->back()->with('status', 'Data berhasil dihapus!');
    }
}
