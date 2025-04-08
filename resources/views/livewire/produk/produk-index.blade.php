<div>
    <livewire:produk.komponen.produk-info />
    <livewire:produk.komponen.produk-list />
</div>

{{-- TAMBAHAN --}}
@push('css')
<!-- PUSH -->
<link rel="stylesheet" href="{{ asset('style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('style/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.min.css') }}">
@endpush

@push('js')

<!-- DataTables  & Plugins -->
<script src="{{ asset('style/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('style/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('style/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('style/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('style/dist/js/adminlte.min.js') }}"></script>
<!-- Page specific script -->

<script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });

    $('#example3').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
      "columnDefs": [
        { "orderable": false, "targets": [-2, -1] }, // Disable ordering on the first and last columns.
        { "className": "text-right", "targets": [3, 4] } // Center align columns 1 and 2
      ],
      "language": {
        "search": "Cari produk:",
        "lengthMenu": "Tampilkan _MENU_ entri",
        "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
        "infoEmpty": "Tidak ada data tersedia",
        "paginate": {
          "first": "Pertama",
          "last": "Terakhir",
          "next": "Berikutnya",
          "previous": "Sebelumnya"
        }
      }
    });

    $('#yajraTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('produk.index') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nama_produk', name: 'nama_produk' },
            { data: 'kategori', name: 'kategori' },
            { data: 'harga', name: 'harga', className: 'text-right' },
            { data: 'stok', name: 'stok', className: 'text-right' },
            { data: 'aksi', name: 'aksi', orderable: false, searchable: false }
        ],
        language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ entri",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
            infoEmpty: "Tidak ada data tersedia",
            paginate: {
                first: "Pertama",
                last: "Terakhir",
                next: "Berikutnya",
                previous: "Sebelumnya"
            }
        }
    });

  });
</script>
@endpush
