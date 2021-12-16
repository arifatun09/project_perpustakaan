<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use PDF;

class AnggotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = Anggota::all();
        return view('anggota.index',['anggota'=>$anggotas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anggota = new Anggota;
        if($request->file('photo')){ 
            $image_name = $request->file('photo')->store('images','public'); 
        }

        
        if($anggota->photo && file_exists(storage_path('app/public/' . $anggota->photo))) { 
            \Storage::delete('public/'.$anggota->photo); 
        } 
        $anggota->nama = $request->name;
        $anggota->photo= $image_name;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        // if true, redirect to index
        return redirect()->route('anggota.index')
        ->with('success', 'Add data success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.show', ['anggota' => $anggota]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.edit',['anggota'=>$anggota]);
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
        $anggota = Anggota::find($id);
        $anggota->nama = $request->name;

        if($anggota->photo && file_exists(storage_path('app/public/' . $anggota->photo))) {
            \Storage::delete('public/'.$anggota->photo); 
        } 
        
        $image_name = $request->file('photo')->store('images', 'public'); 
        $anggota->photo = $image_name;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect()->route('anggota.index');
    }

    public function print_all(){ 
        $anggota = Anggota::all(); 
        $pdf = PDF::loadview('anggota.print_all',['anggota'=>$anggota]);
        return $pdf->stream(); 
    }
    
    public function search(Request $request)
    {
        $keyword = $request->search;
        $anggota = Anggota::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('anggota.index', compact('anggota'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
