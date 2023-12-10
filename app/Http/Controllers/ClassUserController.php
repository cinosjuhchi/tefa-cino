<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\KelasInti;
use Illuminate\Http\Request;
use App\Models\KelasCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClassUserController extends Controller
{
    public function index() {
        if(!Auth::check()) {
            return view('uclass.index', [
                'category' => KelasCategory::all(),               
            ]);
        }else{                        
            return view('uclass.index', [
            'category' => KelasCategory::all(),            
        ]);
        }
        
    }

    public function daftar(Request $request, $kategori = null)
{
    if ($kategori) {
        $kelas = KelasInti::where('kategori_id', $kategori)->get();
        $category = KelasCategory::where('id', $kategori)->get();                         
    }

    return view('uclass.daftar-kelas', compact('kelas', 'category'));
}

    public function kategori(Request $request)
    {
        $kategori = $request->input('kategori'); // Mendapatkan nilai kategori dari request
    
        return redirect()->route('user.uclass.daftar-kelas', ['kategori' => $kategori]);
    }

    public function kelas() {
        $all = KelasInti::all();
        return view('uclass.kelas', compact('all'));
    }

    public function show($id) { 
        $user = Auth::user();        
        $kelasInti = KelasInti::findOrFail($id);  
        $kelasPertama = $kelasInti->kelas()->first();              
        $kelasRancak = $kelasInti->kelas()->get();
        $total = $kelasRancak->count();
        return view('uclass.preview-kelas', [
            'kelas' => $kelasInti,
            'kelasDetail' => $kelasRancak,
            'userdua' => $user,
            'total' => $total,
            'kelasPertama' => $kelasPertama,
        ]);
    }

    public function video($id) {
        if(!Auth::check()) {
            return redirect()->route('uclass.index');
        }        
        $materi = Kelas::findOrFail($id);
        $idInti = $materi->kelas_inti_id;
        $kelas = KelasInti::findOrFail($idInti)->kelas()->get();
        $total = $kelas->count();
        $index = 0;
        return view('uclass.show', [            
            'materi' => $materi,
            'kelas' => $kelas,
            'total' => $total,
            'index' => $index,
        ]);
    }

    public function hasClass() {
        $user = Auth::user();
        $hasClass = $user->kelasDibeli()->get();
        return view('uclass.kelas-user', [
            'hasClass' => $hasClass
        ]);
    }

}
