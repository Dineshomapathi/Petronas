<?php

namespace App\Http\Controllers;

use App\Models\AR;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\URL;

class ARController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Models\AR  $aR
     * @return \Illuminate\Http\Response
     */
    public function show(AR $aR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AR  $aR
     * @return \Illuminate\Http\Response
     */
    public function edit(AR $aR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AR  $aR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AR $aR)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AR  $aR
     * @return \Illuminate\Http\Response
     */
    public function destroy(AR $aR)
    {
        //
    }

    public function picarVID($id)
    {
        $AR = AR::where('uniqueid', $id)->get();
        return view('picarVID', compact('AR'));
    }

    public function picarQR()
    {
        $UNIQUEID = AR::pluck('uniqueid')->first();
        $final = URL::to('/')."/picarVID/".$UNIQUEID;
        $ARQR = QrCode::generate($final);
        return view('picarQR', compact('ARQR'));
    }

    public function picarcreate(Request $request)
    {
        $AR = new AR();
        $AR->uniqueid = Str::uuid();
        $AR->ytlink1 = 'https://demo2.datasupports.com/pic/pic_facts.mp4';
        $AR->ytlink2 = 'https://demo2.datasupports.com/pic/pic_forpengerang.mp4';
        $AR->ytlink3 = 'https://demo2.datasupports.com/pic/pic_hope.mp4';
        $AR->ytlink4 = 'https://demo2.datasupports.com/pic/pic_petchem.mp4';
        $AR->ytlink5 = 'https://demo2.datasupports.com/pic/pic_tansri.mp4';
        $AR->ytlink6 = 'https://demo2.datasupports.com/pic/pic_lab.mp4';
        $AR->ytlink7 = 'https://demo2.datasupports.com/pic/pic_megastructures.mp4';
        $AR->ytlink8 = 'https://demo2.datasupports.com/pic/pic_sustainability.mp4';
        $AR->ytlink9 = 'https://demo2.datasupports.com/pic/pic_peopleofpengerang.mp4';
        $AR->ytlink10 = 'https://demo2.datasupports.com/pic/pic_sound.mp4';
        $AR->save();
        return response()->json($AR);
    }
}
