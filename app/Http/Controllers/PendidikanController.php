<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendidikan;
use App\Models\pekerjaan;
use App\Models\data;
use App\Models\karyaTulis;
use App\Models\organisasi; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PendidikanController extends Controller
{
    public function creatependidikan($nik)
    
    {
        // $data = pendidikan::all();
        
        // $data = DB::table('pendidikans')
        // ->whereIn('data_nik', [$id])
        // ->get();
        $data = pendidikan::whereIn('data_nik', [$nik])->get();
        $datapekerjaan = pekerjaan::whereIn('data_nik', [$nik])->get();
        $datakarya = karyaTulis::whereIn('data_nik', [$nik])->get();
        $dataOrganisasi = organisasi::whereIn('data_nik', [$nik])->get();


        return view('data.pendidikan', compact('data','datapekerjaan','datakarya','dataOrganisasi', 'nik'));
    }

    public function storependidikan(Request $request,)
    {
        
        $data = [
            'data_nik'=>$request->input('data_nik'),
            'jenjang'=>$request->input('jenjang'),
            'namaSekolah'=>$request->input('namaSekolah'),
            'awalmasuk'=>$request->input('awalmasuk'),
            'keluar'=>$request->input('keluar'),
        ];

        pendidikan::create($data);
        return back()->withInput();
    }

    public function storepekerjaan(Request $request,)
    {
        
        $data = [
            'data_nik'=>$request->input('data_nik'),
            'pekerjaan'=>$request->input('pekerjaan'),
            'jenisPekerjaan'=>$request->input('jenisPekerjaan'),
            'awalmasuk'=>$request->input('awalmasuk'),
            'sampai'=>$request->input('sampai'),
        ];

        pekerjaan::create($data);
        return back()->withInput();
    }

    public function storekarya(Request $request,)
    {
        
        $data = [
            'data_nik'=>$request->input('data_nik'),
            'judul'=>$request->input('judul'),
            'jeniskarya'=>$request->input('jeniskarya'),
            'tahunTerbit'=>$request->input('tahunTerbit'),
        ];

        karyaTulis::create($data);
        return back()->withInput();
    }

    public function storeorganisasi(Request $request,)
    {
        
        $data = [
            'data_nik'=>$request->input('data_nik'),
            'namaOrganisasi'=>$request->input('namaOrganisasi'),
            'jabatan'=>$request->input('jabatan'),
            'awalmasuk'=>$request->input('awalmasuk'),
            'sampai'=>$request->input('sampai'),
        ];

        organisasi::create($data);
        return back()->withInput();
    }

    public function kembali()
    {
        return  redirect('/')->with('success',' Data Berhasil Diuploud, Silahkan Hubungi PPS untuk Menyerahkan Persyaratan yang lain !'); 
    }

    public function destroy_pendidikan($nik, $jenjang)
    {
    pendidikan::where('data_nik', $nik)
              ->where('jenjang', $jenjang)
              ->delete();

    return back();
    }

    public function destroy_pekerjaan($nik, $pekerjaan)
    {
        pekerjaan::where('data_nik', $nik)
        ->where('pekerjaan', $pekerjaan)
        ->delete();

    return back();
    }

    public function destroy_karya($nik, $judul)
    {
        karyaTulis::where('data_nik', $nik)
        ->where('judul', $judul)
        ->delete();

    return back();

    }

    public function destroy_organisasi($nik, $namaOrganisasi)
    {
        organisasi::where('data_nik', $nik)
        ->where('namaOrganisasi', $namaOrganisasi)
        ->delete();

    return back();
    }

}
