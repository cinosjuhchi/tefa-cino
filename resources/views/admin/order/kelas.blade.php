@extends('admin.dashboard.layouts.main')
@section('content')
<div class="container my-4">
    <div class="headline">
      <h1>List Order</h1>
      <div class="d-flex justify-content-between">
      <div class="btn btn-warning">KONSOL</div>
      <form class="d-flex" role="search" method="GET" action="{{ route('order.kelas') }}">
        <input class="form-control me-2" name="search" id="searchInput" type="text" placeholder="Cari no pesan" aria-label="Search">        
        <a href="{{ route('order.kelas') }}" class="btn btn-warning">Refresh</a>
      </form>
    </div>
      <hr class="text-warning opacity-100 border-4 rounded" />
    </div>

    <div class="content">
      <table class="table table-bordered" id="orderTable">
        <thead>
          <tr>
            <th scope="col">No Pesan</th>
            <th scope="col">Kategori</th>
            <th scope="col">Kelas</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">Email Customer</th>
            <th scope="col">Total</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Status</th>
            <th scope="col" class="col-1">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($order as $orderan)        
          <tr class="">
            <th scope="row">{{ $orderan->no_pesan }}</th>
            <td>{{ $orderan->kelas->category->title }}</td>
            <td>{{ $orderan->kelas->nama }}</td>
            <td>{{ $orderan->nama_customer }}</td>
            <td>{{ $orderan->email_customer }}</td>
            <td>Rp. {{ number_format($orderan->total, 0, ',', '.') }}</td>
            <td>{{ $orderan->deskripsi }}</td>
            <td>{{ $orderan->status }}</td>
            <td class="d-flex gap-3">
                <a href="" class="nav-link"><i class="bi bi-x-circle-fill fs-2 text-danger" aria-disabled="true"></i></a>
                <a href="{{ route('order.update.kelas', ['nop' => $orderan->no_pesan]) }}" class="nav-link "  onclick="return confirm('Apakah Anda yakin ingin mengkonfirmasi pesanan ini?')"><i class="bi bi-check-circle-fill fs-2 text-success"></i></a>
            </td>
          </tr>
        @endforeach

        </tbody>
      </table>
    </div>
  </div>
@endsection
