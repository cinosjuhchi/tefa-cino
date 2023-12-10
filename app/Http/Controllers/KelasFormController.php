<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\BuyClass;
use App\Models\KelasInti;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KelasCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class KelasFormController extends Controller
{
    public function index(Request $request) {
        $kelasId = $request->route('id');
        $kelas = KelasInti::findOrFail($kelasId);  
        $user = Auth::user(); 
        $kategori = $kelas->category->title;        
        return view('uclass.form', [
            'kelas' => $kelas,
            'kategori' => $kategori,
            'user' => $user,
        ]);
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
        ]);        
        do {
            $noPesan = Str::random(8);
        }while(BuyClass::where('no_pesan', $noPesan)->exists());
        $name = $request->input('nama');
        $email = $request->input('email');
        $deskripsi = $request->input('deskripsi'); 
        $total = $request->input('total'); 
        $idKelas = $request->input('idKelas');
        $namaKelas = KelasInti::findOrFail($idKelas)->nama;

        $buyClass = new BuyClass();        
        $buyClass->user_id = Auth::user()->id;
        $buyClass->no_pesan = $noPesan;
        $buyClass->kelas_id = $idKelas;
        $buyClass->nama_customer = $name;
        $buyClass->email_customer = $email;
        $buyClass->total = $total;
        $buyClass->deskripsi = $deskripsi;
        $buyClass->status = 'pending';
        $buyClass->save();

        return to_route('user.uclass.form.success', [
            'nama' => $name,
            'kelas' => $namaKelas,
            'noPesan' => $noPesan
        ]);
        
    }

    public function success(string $nama, string $kelas, string $noPesan): RedirectResponse
    {
        $no_phone = config('app.no_phone');
        $message = "Halo, saya $nama, yang memesan kelas $kelas dengan no receipt $noPesan.\n\nSaya ingin mendiskusikan lebih lanjut terkait pemesanan saya";

        $url = "https://api.whatsapp.com/send?phone=$no_phone&text=".urlencode($message);

        // Redirect to the WhatsApp URL
        return redirect($url);
    }
}
