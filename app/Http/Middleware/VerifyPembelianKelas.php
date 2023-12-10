<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifyPembelianKelas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next) {
     $sId = $request->route('id');
     $kelasId = Kelas::findOrFail($sId)->kelas_inti_id;
     $user = Auth::user();

    if($user->pembelianKelas()->where('kelas_inti_id', $kelasId)->exists()) {
        return $next($request);
    }else {
        return redirect()->route('user.uclass.all-kelas')->with('error', 'Anda belum membeli kelas ini.');
    }
        
    }

}
