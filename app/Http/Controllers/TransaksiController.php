<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Buku;
use App\Models\Anggota;
use DB;

class TransaksiController extends Controller
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
        $transaksis = DB::table('transaksis')
                    ->join('anggotas', 'anggotas.id', '=', 'transaksis.anggota_id')
                    ->join('bukus', 'bukus.id', '=', 'transaksis.buku_id')
                    ->get();
        return view('transaksi.index',['transaksis'=>$transaksis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bukus = Buku::all();
        $anggotas = Anggota::all();
        return view('transaksi.create', ['anggota'=>$anggotas, 'buku'=>$bukus]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //add data
        Transaksi::create($request->all());
        // if true, redirect to index
        return redirect()->route('transaksi.index')
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
        $transaksi = DB::table('transaksis')
            ->join('anggotas', 'anggotas.id', '=', 'transaksis.anggota_id')
            ->join('bukus', 'bukus.id', '=', 'transaksis.buku_id')
            ->where('transaksis.id', '=', $id)
            ->get();
        return view('transaksi.show',['transaksi'=>$transaksi]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = DB::table('transaksis')
            ->join('anggotas', 'anggotas.id', '=', 'transaksis.anggota_id')
            ->join('bukus', 'bukus.id', '=', 'transaksis.buku_id')
            ->where('transaksis.id', '=', $id)
            ->get();
        return view('transaksi.edit',['transaksi'=>$transaksi]);
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
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $transaksis = DB::table('transaksis')
                    ->join('anggotas', 'anggotas.id', '=', 'transaksis.anggota_id')
                    ->join('bukus', 'bukus.id', '=', 'transaksis.buku_id')
                    ->where('anggotas.nama', 'like', "%" . $keyword . "%")->paginate(5)
                    ->get();
        return view('transaksi.index', compact('transaksi'))->with('i', (request()->input('page', 1) - 1) * 5);
        
    }
}
