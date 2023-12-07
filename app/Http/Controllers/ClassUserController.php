<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\KelasCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClassUserController extends Controller
{
    public function index() {
        return view('uclass.index', [
            'category' => KelasCategory::all()
        ]);
    }

    public function daftar(Request $request, $kategori = null)
{
    if ($kategori) {
        $kelas = Kelas::where('category_id', $kategori)->get();
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
        $all = Kelas::all();
        return view('uclass.kelas', compact('all'));
    }

    public function show($id) {
        $user = Auth::user();
        $slug = $id;
        $kelas = Kelas::findOrFail($slug);
        $hasClass = $user->kelasDibeli()->get();
        return view('uclass.show', [
            'kelas' => $kelas,
            'hasclass' => $hasClass,
        ]);
    }
}
