<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\pendidikan;
use App\Models\organisasi;
use App\Models\pekerjaan;
use App\Models\karyaTulis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;

class DataController extends Controller
{
    public function create()
    {
        return view('data.create');
    }

    public function store(Request $request)
    {
        Session::flash('namaLengkap', $request->namaLengkap);
        Session::flash('namaLengkap', $request->nik);
        Session::flash('jenisKelamin', $request->jenisKelamin);
        Session::flash('usia', $request->usia);
        Session::flash('ttl', $request->ttl);
        Session::flash('alamatLengkap', $request->alamatLengkap);

        $request->validate([
            'nik'=>'unique:data',
        ], [
            'nik.unique'=>'Cek NIK Ulang',
            ]);

        $data = [
            'namaLengkap'=>$request->input('namaLengkap'),
            'nik'=>$request->input('nik'),
            'jenisKelamin'=>$request->input('jenisKelamin'),
            'ttl'=>$request->input('ttl'),
            'usia'=>$request->input('usia'),
            'alamatLengkap'=>$request->input('alamatLengkap'),
            'pekerjaan'=>$request->input('pekerjaan'),
            'status'=>$request->input('status'),
            'namaIS'=>$request->input('namaIS'),
            'jumlahAnak'=>$request->input('jumlahAnak'),
            'wilayah'=>$request->input('wilayah'),
        ]; 
        $nik = $request->input('nik');    
        data::create($data);
        return redirect('/inputdata/'.$nik);
    }



    public function show()
{
    $data = Data::orderBy('created_at', 'desc')->get();
    return view('data.tampil', compact('data'));
}

    public function edit($nik)
    {
        $data = data::where('nik', $nik)->first();
        return view('data.edit',compact('data'));
    }

    public function update(Request $request, $nik)
    {
        $data = [
            'namaLengkap'=>$request->input('namaLengkap'),
            'nik'=>$request->input('nik'),
            'jenisKelamin'=>$request->input('jenisKelamin'),
            'ttl'=>$request->input('ttl'),
            'usia'=>$request->input('usia'),
            'alamatLengkap'=>$request->input('alamatLengkap'),
            'pekerjaan'=>$request->input('pekerjaan'),
            'status'=>$request->input('status'),
            'namaIS'=>$request->input('namaIS'),
            'jumlahAnak'=>$request->input('jumlahAnak'),
            'wilayah'=>$request->input('wilayah'),
        ];

        data::where('nik', $nik)->first()->update($data);
        return redirect('/inputdata/'.$nik);
    }

    public function destroy($nik)
    {
        data::where('nik', $nik)->delete();
        pendidikan::where('data_nik', $nik)->delete();
        pekerjaan::where('data_nik', $nik)->delete();
        karyaTulis::where('data_nik', $nik)->delete();
        organisasi::where('data_nik', $nik)->delete();
        return redirect('/dasboard')->with('success',' Data Berhasil dihapus');
    }
    public function view_pdf($nik)
    {
        $data = data::where('nik', $nik)->first();
        $pendidikan = pendidikan::whereIn('data_nik', [$nik])->get();
        $pekerjaan = pekerjaan::whereIn('data_nik', [$nik])->get();
        $karyaTulis = karyaTulis::whereIn('data_nik', [$nik])->get();
        $organisasi = organisasi::whereIn('data_nik', [$nik])->get();
        return view('layout.surat',compact('data','pendidikan','organisasi','karyaTulis','pekerjaan'));
    }

// pndidikan

public function dasboard()
{

    $user = Auth::user();
    $nama = $user->name;
    $data = data::whereIn('wilayah', [$nama])->latest()->get();
    return view('dasboard',compact('data'));
}




}


