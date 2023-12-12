<?php

namespace App\Http\Controllers\admin;

use App\Models\Kelas;
use App\Models\KelasInti;
use Illuminate\Http\Request;
use App\Models\KelasCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Console\Migrations\RefreshCommand;

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
    public function formVideo($id) {
        $kategori = KelasCategory::all();
        $kelasInti = KelasInti::findOrFail($id);
        return view('admin.uclass.formVideo', [
            'kategori' => $kategori,
            'kelasInti' => $kelasInti,
        ]);
    }

    public function formUpdateCategory($id) {        
        $kategori = KelasCategory::findOrFail($id);
        return view('admin.uclass.FormCategoryUpdate', [
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

        return Redirect::route('uclass.plan')->with('success', 'Data berhasil diperbarui');
    }

    public function addVideo(Request $request) {
        $nama = $request->input('nama');
        $kategori = $request->input('kategori_id');
        $deskripsi = $request->input('deskripsi');
        $link = $request->input('link_vid');
        $kelasInti = $request->input('kelas_inti_id');

        $kelas = new Kelas();
        $kelas->kelas_inti_id = $kelasInti;
        $kelas->nama = $nama;
        $kelas->category_id = $kategori;
        $kelas->deskripsi = $deskripsi;
        if($request->file('gambar')) {
            $gambar = $request->file('gambar')->store("sub-category/uclass", ['disk' => 'public-dir']);
            $kelas->gambar = $gambar;
            }
        $kelas->link_vid = $link;
        $kelas->save();
        return redirect()->route('uclass.plan');
    }
    public function updateClass(Request $request) {
        $kelasId = $request->input('kelas_inti_id');
        $nama = $request->input('nama');
        $kategori = $request->input('kategori_id');
        $deskripsi = $request->input('deskripsi');        
        $harga = $request->input('harga');

        $kelas = KelasInti::findOrFail($kelasId);
        $kelas->nama = $nama;
        $kelas->kategori_id = $kategori;
        $kelas->deskripsi = $deskripsi;
        $kelas->harga = $harga;

        if($request->file('gambar')) {
            $gambar = $request->file('gambar')->store("sub-category/uclass", ['disk' => 'public-dir']);
            $kelas->gambar = $gambar;
            }        
        $kelas->save();
        return Redirect::route('uclass.plan')->with('success', 'Data berhasil diperbarui');
    }

    public function updateCategory(Request $request) {
        $category_id = $request->input('id_kategori');        
        $body = $request->input('body');
        $image = $request->input('image');

        $category = KelasCategory::findOrFail($category_id);        
        $category->body = $body;        

        if($request->file('image')) {
            $image = $request->file('image')->store("sub-category/uclass", ['disk' => 'public-dir']);
            $category->image = $image;
            }        
        $category->save();
        return Redirect::route('uclass-category.index')->with('success', 'Data berhasil diperbarui');
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

    public function formUpdate($id) {
        $kategori = KelasCategory::all();
        $kelas = KelasInti::findOrFail($id);
        return view('admin.uclass.FormUpdateClass', [
            'kelas' => $kelas,
            'kategori' => $kategori,
        ]);
    }
}
