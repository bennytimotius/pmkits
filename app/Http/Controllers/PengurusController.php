<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Pengurus;

class PengurusController extends Controller
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
        $pengurus = Pengurus::paginate(10);
        $divisi = "Pengurus";
        return view('pengurus/pengurus', compact('pengurus'))->with('divisi',$divisi);
    }

    public function ksb()
    {
        $pengurus = Pengurus::paginate(10);
        $divisi = "KSB";
        
        return view('pengurus/pengurus', compact('pengurus'))->with('divisi',$divisi);
    }

    public function dpk()
    {
        $pengurus = Pengurus::paginate(10);
        $divisi = "DPK";
        
        return view('pengurus/pengurus', compact('pengurus'))->with('divisi',$divisi);
    }

    public function medfo()
    {
        $pengurus = Pengurus::paginate(10);
        $divisi = "Medfo";
        
        return view('pengurus/pengurus', compact('pengurus'))->with('divisi',$divisi);
    }

    public function pemuridan()
    {
        $pengurus = Pengurus::paginate(10);
        $divisi = "Pemuridan";
        
        return view('pengurus/pengurus', compact('pengurus'))->with('divisi',$divisi);
    }

    public function persekutuan()
    {
        $pengurus = Pengurus::paginate(10);
        $divisi = "Persekutuan";
        
        return view('pengurus/pengurus', compact('pengurus'))->with('divisi',$divisi);
    }

    public function pkmbk()
    {
        $pengurus = Pengurus::paginate(10);
        $divisi = "PKMBK";
        
        return view('pengurus/pengurus', compact('pengurus'))->with('divisi',$divisi);
    }

    public function napas()
    {
        $pengurus = Pengurus::paginate(10);
        $divisi = "NaPas";
        
        return view('pengurus/pengurus', compact('pengurus'))->with('divisi',$divisi);
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
        //
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
