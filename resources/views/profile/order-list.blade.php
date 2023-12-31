@extends('layouts.main')

@push('styles')
    @vite('resources/js/datatable.js')
@endpush

@section('header')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between container">
            <div class="logo">
                <h1><a href="{{ route('home') }}">{{ app('websiteTitle') }}</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#orderlist">List Order</a></li>
                    @include('layouts.dropdown')
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
@endsection

@section('main')
    <main style="min-height: 100vh">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="align-items-center justify-content-between d-flex">
                    <h2>List Order</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>List Order</li>
                    </ol>
                </div>
            </div>
        </section>
        <section id="orderlist">
            <div class="container">
                <div class="justify-content-center">
                    <div class="col-lg-12">
                        <div class="box profile-box rounded-3">
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <form method="get">
                                            @if (request('type') != 'cancel')
                                                <input type="hidden" name="type" value="cancel">
                                                <button type="submit"
                                                    class="btn btn-danger btn-sm px-3 py-2 text-white">Cancel
                                                    Order</button>
                                            @else
                                                <a href="{{ route('user.order.list') }}"
                                                    class="btn btn-info btn-sm px-3 py-2 text-white">
                                                    Reset</a>
                                            @endif
                                        </form>
                                    </div>
                                    <div class="col-md-12">
                                        <form method="GET" id="filterForm">
                                            @if (request('type') == 'cancel')
                                                <input type="hidden" name="type" value="cancel">
                                            @endif

                                            <input type="hidden" name="period" value="{{ request('period', 1) }}">

                                            <div class="d-flex align-items-center flex-nowrap" style="column-gap: 10px">
                                                <div class="col-md-11">
                                                    <select class="form-select" name="category"
                                                        aria-label="Select Category Order">
                                                        <option value="all"
                                                            {{ request('category') == 'all' ? 'selected' : null }}>All
                                                            Category</option>
                                                        <option value="design"
                                                            {{ request('category') == 'design' ? 'selected' : null }}>
                                                            Design</option>
                                                        <option value="photography"
                                                            {{ request('category') == 'photography' ? 'selected' : null }}>
                                                            Photography
                                                        </option>
                                                        <option value="videography"
                                                            {{ request('category') == 'videography' ? 'selected' : null }}>
                                                            Videography
                                                        </option>
                                                        <option value="printing"
                                                            {{ request('category') == 'printing' ? 'selected' : null }}>
                                                            Printing
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-sm px-3 py-2">Filter</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <table class="table" id="table-order" data-default-length="{{ $defaultLength }}">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Order</th>
                                            <th>Order Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->ulid }}</td>
                                                <td>
                                                    {{ $order->orderable->order_title }}
                                                </td>
                                                <td>{{ $order->created_at->format('d F Y') }}</td>
                                                @php
                                                    $statusClass = '';
                                                    if ($order->status == 'cancel') {
                                                        $statusClass = 'danger';
                                                    } elseif ($order->status == 'pending') {
                                                        $statusClass = 'warning';
                                                    } elseif ($order->status == 'progress') {
                                                        $statusClass = 'info';
                                                    } else {
                                                        $statusClass = 'success';
                                                    }
                                                @endphp
                                                <td><span class="badge bg-{{ $statusClass }}">{{ $order->status }}</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-info d-inline-flex align-items-center justify-content-center py-0 text-white"
                                                        style="column-gap: 4px"
                                                        href="{{ route('user.order.show', $order->ulid) }}">
                                                        <i class='bx bx-detail'></i>
                                                        Detail
                                                    </a>
                                                    @if ($order->status == 'pending')
                                                        @php
                                                            $orderableType = strtolower(class_basename($order->orderable_type));
                                                        @endphp

                                                        <a class="btn btn-sm btn-primary d-inline-flex align-items-center justify-content-center py-0 text-white"
                                                            style="column-gap: 4px"
                                                            href="{{ route("user.order.$orderableType.edit", $order->ulid) }}">
                                                            <i class='bx bx-pencil'></i>
                                                            Edit
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    {{ $orders->appends(['period' => request('period'), 'category' => request('category')])->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        function createDataTable(id, length) {
            $(`#${id}`).DataTable({
                dom: '<"d-flex"l><frBt>',
                paging: true,
                lengthMenu: [
                    [length, 7, 30, 100, 500],
                    ["Today", "This Week", "This Month", "This Year", "All"]
                ],
                responsive: true,
                pageLength: length,
                order: [
                    [2, "asc"],
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

                            doc.content[1].table.widths = Array(doc.content[1].table.body[0]
                                    .length)
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
        }

        document.addEventListener('DOMContentLoaded', function() {
            const defaultLength = $("#table-order").data('default-length');

            createDataTable("table-order", defaultLength)

            const urlParams = new URLSearchParams(window.location.search);
            const periodParam = urlParams.get('period');

            const selectElement = $('#table-order_length select');

            switch (periodParam) {
                case "week":
                    selectElement.val('7');
                    break;
                case "month":
                    selectElement.val('30');
                    break;
                case "year":
                    selectElement.val('100');
                    break;
                case "all":
                    selectElement.val('500');
                    break;
                default:
                    // Jika parameter tidak sesuai, atur ke nilai default
                    selectElement.val(defaultLength);
                    break;
            }

            // Nonaktifkan fungsi kontrol panjang
            $('#table-order_length select').off('change')

            $("#table-order_length select").on("change", function() {
                const selectedValue = parseInt($('#table-order_length select').val());
                const formDate = $('#filterForm');

                switch (selectedValue) {
                    case 7:
                        formDate.find('input[name="period"]').val("week");
                        break;
                    case 30:
                        formDate.find('input[name="period"]').val("month");
                        break;
                    case 100:
                        formDate.find('input[name="period"]').val("year");
                        break;
                    case 500:
                        formDate.find('input[name="period"]').val("all");
                        break;
                    default:
                        formDate.find('input[name="period"]').val("today");
                        break;
                }
            })
        })
    </script>
@endpush
