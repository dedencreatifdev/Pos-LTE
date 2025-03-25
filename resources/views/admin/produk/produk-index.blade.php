@extends('layouts.app')
@section('konten')
    {{-- @foreach ($produk as $item)
        {{ $item->code }}
    @endforeach --}}

    <div class="container">
        <div class="card">
            <div class="card-header">Manage Users</div>
            <div class="p-1 card-body">
                {{ $dataTable->table() }}
                <div class="table">

                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('style') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('style') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('style') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@push('js')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    <script src="{{ asset('style') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('style') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('style') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('style') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('style') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('style') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
@endpush
