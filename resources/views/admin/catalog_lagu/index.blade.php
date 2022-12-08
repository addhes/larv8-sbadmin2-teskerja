@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="row mx-auto">
                                        <i class="fa fa-music mt-1"></i> <h4 class="ml-1">Catalog </h4> <h4 class="text-secondary ml-1"> List</h4>
                                    </div>
                                    <div class="row mx-auto">
                                        <p style="margin-top: -10px;">Catalog Management Dashboard</p>
                                    </div>
                                </div>
                                <div class="col pl-5">
                                    <a href="{{ route('catlog.create') }}" class="btn btn-success"><i class="fa fa-plus-circle mt-1"></i></a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" style="width:100%" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Updated At</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection

@push('css')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('js')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                serverside: true,
                responseive: true,
                ajax: "{{ route('catlog.index') }}",
                columns: [
                    {{-- {data: 'id', name: 'id'}, --}}
                    {data: 'no', name: 'no'},
                    {data: 'title', name: 'title'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action'}
                ]
            })
        })
    </script>
@endpush