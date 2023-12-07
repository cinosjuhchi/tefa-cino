<?php

namespace App\Http\Controllers\admin;

use App\Models\Kelas;
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

    public function rumah() {
        $rpl = Kelas::where('category_id', 1)->get();
        $bdp = Kelas::where('category_id', 2)->get();
        $akl = Kelas::where('category_id', 3)->get();
        $otkp = Kelas::where('category_id', 4)->get();
        return view('admin.uclass.classlist', [
            'rpl' => $rpl,
            'akl' => $akl,
            'bdp' => $bdp,
            'otkp' => $otkp,
        ]);
    }
}
