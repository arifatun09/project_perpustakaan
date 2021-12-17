<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Buku;
use App\Models\Anggota;
use PDF;
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
                    ->join('anggotas', 'transaksis.anggota_id', '=', 'anggotas.id')
                    ->join('bukus', 'transaksis.buku_id', '=', 'bukus.id')
                    ->select('transaksis.id as transaksi_id', 'transaksis.*', 'anggotas.*', 'bukus.*')
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
            ->join('anggotas', 'transaksis.anggota_id', '=', 'anggotas.id')
            ->join('bukus', 'transaksis.buku_id', '=', 'bukus.id')
            ->select('transaksis.id as transaksi_id', 'transaksis.*', 'anggotas.*', 'bukus.*')
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
        dd($request);
        $transaksi = Transaksi::find($id);
        $transaksi->anggota_id = $request->anggota_id;
        $transaksi->buku_id = $request->buku_id;
        $transaksi->tgl_pinjam = $request->tgl_pinjam;
        $transaksi->tgl_kembali = $request->tgl_kembali;
        $transaksi->status = $request->status;
        $transaksi->save();
        return redirect()->route('transaksi.index');
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

    public function printtrans($id)
    {
        $transaksi = DB::table('transaksis')
            ->join('anggotas', 'anggotas.id', '=', 'transaksis.anggota_id')
            ->join('bukus', 'bukus.id', '=', 'transaksis.buku_id')
            ->where('transaksis.id', '=', $id)
            ->get();
        $pdf = PDF::loadview('transaksi.print',['transaksi'=>$transaksi]); 
        return $pdf->stream();
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $transaksis = Transaksi::join('anggotas', 'anggotas.id', '=', 'transaksis.anggota_id')
                    ->join('bukus', 'bukus.id', '=', 'transaksis.buku_id')
                    ->select('transaksis.id as transaksi_id', 'transaksis.*', 'anggotas.*', 'bukus.*')
                    ->where('anggotas.nama', 'like', "%".$keyword."%")
                    ->paginate();
        return view('transaksi.index', compact('transaksis'))->with('i', (request()->input('page', 1) - 1) * 5);    
    }
}
