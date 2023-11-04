@extends('admin.layouts.main')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4>Design Order's List</h4>
                            <div class="mt-4">
                                <table class="mb-0 table border" id="data-table-design">
                                    <thead class="table-light fw-semibold">
                                        <tr class="align-middle">
                                            <th class="text-center">Order ID</th>
                                            <th class="text-center">Order</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Order Date</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($designs as $design)
                                            <td>{{ $design->order->ulid }}</td>
                                            <td>{{ $design->category->title }}</td>
                                            <td>{{ $design->order->name_customer }}</td>
                                            <td>{{ $design->created_at->format('d F Y') }}</td>
                                            @php
                                                $statusClass = '';
                                                if ($design->order->status == 'cancel') {
                                                    $statusClass = 'danger';
                                                } elseif ($design->order->status == 'pending') {
                                                    $statusClass = 'warning';
                                                } elseif ($design->order->status == 'progress') {
                                                    $statusClass = 'info';
                                                } else {
                                                    $statusClass = 'success';
                                                }
                                            @endphp
                                            <td><span
                                                    class="badge bg-{{ $statusClass }}">{{ $design->order->status }}</span>
                                            </td>
                                            <td>{{ $design->price }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-transparent p-0" type="button"
                                                        data-coreui-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <svg class="icon">
                                                            <use
                                                                xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options') }}">
                                                            </use>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" target="_blank"
                                                            href="export-to-pdf/design/1">Export to PDF</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('order.show', $design->order->ulid) }}">Detail</a>
                                                    </div>
                                                </div>
                                            </td>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $("#data-table-design").DataTable({
                dom: 'Bfrtip',
                paging: true,
                pageLength: 10,
                stateSave: true,
                stateDuration: 60 * 5,
                order: [
                    [4, "asc"],
                    [3, 'asc']
                ],
                buttons: [{
                        extend: "copy",
                        exportOptions: {
                            columns: ":not(:last-child)" // Mengabaikan kolom terakhir
                        }
                    },
                    {
                        extend: "excel",
                        exportOptions: {
                            columns: ":not(:last-child)" // Mengabaikan kolom terakhir
                        }
                    },
                    {
                        extend: "pdf",
                        exportOptions: {
                            columns: ":not(:last-child)" // Mengabaikan kolom terakhir
                        },
                        customize: function(doc) {
                            // Mengatur properti alignment menjadi center untuk seluruh teks dalam tabel
                            doc.content[1].table.body.forEach(function(row) {
                                row.forEach(function(cell) {
                                    cell.alignment = 'center';
                                });
                            });

                            // Mengatur lebar kolom agar semua kolom terlihat dalam satu halaman PDF
                            let colWidth = 100 / doc.content[1].table.body[0].length + '%';

                            doc.content[1].table.widths = Array(doc.content[1].table.body[0].length)
                                .fill(colWidth);

                            // Menambahkan margin ke sisi kiri dan kanan
                            doc.pageMargins = [10, 10, 10, 10];
                        },
                    },
                ],
                language: {
                    infoEmpty: "No entries to show",
                    search: "_INPUT_",
                    searchPlaceholder: "Search...",
                },
                columnDefs: [{
                    "searchable": false,
                    "orderable": false,
                    "targets": -1,
                }]
            });
        })
    </script>
@endpush
