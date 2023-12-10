<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\BuyClass;
use Illuminate\View\View;
use App\Models\Admin\Order;
use Illuminate\Http\Request;
use App\Models\PembelianKelas;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Notifications\OrderNotification;

class OrderListController extends Controller
{
    /**
     * Retrieves all orders based on the given request.
     */
    public function all(Request $request): View
    {
        // Jangan yang ada di dalam [7, 30, 100, 500]
        $defaultLength = 10;

        $orders = Order::with('orderable')
            ->when($request->has('category') && in_array($request->category, ['design', 'photography', 'videography', 'printing']), function ($query) use ($request) {
                return $query->whereCategory($request->category);
            })
            ->when($request->has('period'), function ($query) use ($request) {
                return $query->whereFilterByTimePeriod($request->period);
            }, function ($query) {
                return $query->whereDate('created_at', now());
            })->when($request->has('type'), function ($query) {
                $query->whereCanceledOrders();
            }, function ($query) {
                $query->whereNotCanceledOrders();
            })
            ->paginate($defaultLength);

        return view('admin.order.all', compact('orders', 'defaultLength'));
    }

    /**
     * Show the order details.
     */
    public function show(Order $order): View
    {
        $order->load('orderable');
        if ($order->orderable_type === 'App\Models\Admin\Design') {
            $order->orderable->load('images');
        }

        return view('admin.order.detail', compact('order'));
    }

    /**
     * Updates the status of an order.
     */
    public function update(Request $request, Order $order): RedirectResponse
    {
        $order->update([
            'status' => $request->status,
        ]);

        $order->user->notify(new OrderNotification($order->ulid, $order->user_id, $order->status));

        return back()->with('success', "You're successfully updated status a order");
    }

    public function kelas(Request $request) {
        $search = $request->input('search');
    
        // Jika ada input pencarian, ambil data sesuai pencarian.
        if ($search) {
            $orderan = BuyClass::with('kelas.category')
                        ->where('no_pesan', 'like', '%' . $search . '%')
                        ->get();
        } else {
            // Jika tidak ada input pencarian, ambil semua data.
            $orderan = BuyClass::with('kelas.category')->get();
        }
        
        return view('admin.order.kelas', [
            'order' => $orderan,
        ]);
    }
    public function updatestat($nop) {
        $buyClass = BuyClass::where('no_pesan', $nop)->first();
        if ($buyClass) {
            $buyClass->update(['status' => 'completed']);

            $pembelian = new PembelianKelas();
            $pembelian->user_id = $buyClass->user_id;
            $pembelian->kelas_inti_id = $buyClass->kelas_id;
            $pembelian->tanggal_pembelian = Carbon::now();
            $pembelian->save();
        }

        return redirect()->route('order.kelas');
    }
    
    
}
