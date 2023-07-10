@extends('admin.layout.master')

@section('title')
    kelahiran AKTE LAHIR
@endsection
@push('after-style')



@endpush
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body table-responsive">
               
               
                <br>
                <br>
                <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap">
                    {{-- <table class="table table-striped table-hover datatable" width="100%"> --}}
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Wisatawan</th>
                        <th>Harga</th>
        
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>
</div> 

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Hapus</button>
            </div>
        </div>
    </div>
</div>


<form id="deleteForm" method="POST">
    @csrf
    @method('DELETE')
</form>

@endsection



@push('after-script')

<script 
type="text/javascript">
 $(document).ready(function() {
    $('.table').DataTable({
    processing: true,
    serverSide: true,
    serverSide: true,
    ajax: {
        url: '{{ route('orderan.index') }}',
        
    },
    columns: [
            {data: 'id', name: 'id', searchable: true, orderable: true},      
            {data: 'user.email', name: 'user.email', searchable: true, orderable: true}, 
            {data: 'jumlah', name: 'jumlah', searchable: true, orderable: true}, 
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ] 
    });
});

$(document).on('click', '.btn-delete', function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    $('#deleteModal').modal('show');
    $('#deleteForm').attr('action', url);
});

$(document).on('click', '#confirmDelete', function(e) {
    e.preventDefault();
    $('#deleteForm').submit();
});

</script>



@endpush
