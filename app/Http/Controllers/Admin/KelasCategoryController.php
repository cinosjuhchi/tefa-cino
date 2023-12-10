<?php

namespace App\Http\Controllers\admin;

use App\Models\Kelas;
use App\Models\KelasInti;
use Illuminate\Database\Console\Migrations\RefreshCommand;
use Illuminate\Http\Request;
use App\Models\KelasCategory;
use App\Http\Controllers\Controller;

class KelasCategoryController extends Controller
{
    public function index() {
        return view('admin.uclass.categories', [
            'category' => KelasCategory::all()            
        ]);
    }

    public function formClass() {
        $kategori = KelasCategory::all();
        return view('admin.uclass.formClass', [
            'kategori' => $kategori,
        ]);
    }

    public function addClass(Request $request) {
        $nama = $request->input('nama');
        $kategori = $request->input('kategori_id');
        $deskripsi = $request->input('deskripsi');
        $harga = $request->input('harga');
        
        
        $kelasInti = new KelasInti();
        $kelasInti->nama = $nama;
        $kelasInti->kategori_id = $kategori;
        $kelasInti->deskripsi = $deskripsi;
        if($request->file('gambar')) {
        $gambar = $request->file('gambar')->store("sub-category/uclass", ['disk' => 'public-dir']);
        $kelasInti->gambar = $gambar;
        }
        $kelasInti->harga = $harga;
        $kelasInti->save();

        return redirect()->route('uclass.form.class');
    }

    public function rumah() {
        $rpl = KelasInti::where('kategori_id', 1)->get();
        $bdp = KelasInti::where('kategori_id', 2)->get();
        $akl = KelasInti::where('kategori_id', 3)->get();
        $otkp = KelasInti::where('kategori_id', 4)->get();
        return view('admin.uclass.classlist', [
            'rpl' => $rpl,
            'akl' => $akl,
            'bdp' => $bdp,
            'otkp' => $otkp,
        ]);
    }
}
