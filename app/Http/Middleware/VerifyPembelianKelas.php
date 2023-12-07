<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
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
     $kelasId = $request->route('id');
     $user = Auth::user();

    if($user->pembelianKelas()->where('kelas_id', $kelasId)->exists()) {
        return $next($request);
    }else {
        return redirect()->route('user.uclass.all-kelas')->with('error', 'Anda belum membeli kelas ini.');
    }
        
    }

}
