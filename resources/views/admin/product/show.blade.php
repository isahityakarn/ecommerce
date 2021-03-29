@extends('admin/base')
@section('mycss')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <style>
        .dt-buttons {
            /* margin-bottom: -7px; */
            position: absolute;
            bottom: 0;
            left: 50;
            right: 0;
            text-align: center;
        }

    </style>
@endsection
@section('myjs')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "order": [
                    [0, "desc"]
                ],
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

    </script>

    <script>
        $(function() {
            setTimeout(function() {
                $("#message_id").remove();
            }, 1000);
        });

    </script>
@endsection
@section('mybody')
    <div class="content p-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @if (Session::has('success'))
                            <div class="alert alert-success" id="message_id" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="float-left">
                                <h2>{{ ucwords('category') }}</h2>
                            </div>
                            <div class="float-right">
                                <a href="" class="btn btn-primary">Show Product</a>
                            </div>

                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>{{ ucwords('id') }}</th>
                                        <th>{{ ucwords('name') }}</th>
                                        <th>{{ ucwords('image') }}</th>
                                        <th>{{ ucwords('slug') }}</th>
                                        <th>{{ ucwords('s_description') }}</th>
                                        <th>{{ ucwords('description') }}</th>
                                        <th>{{ ucwords('specification') }}</th>
                                        <th>{{ ucwords('price') }}</th>
                                        <th>{{ ucwords('stock') }}</th>
                                        <th>{{ ucwords('quantity') }}</th>
                                        <th>{{ ucwords('category_id ') }}</th>
                                        <th>{{ ucwords('c_slug') }}</th>
                                        <th>{{ ucwords('created_at') }}</th>
                                        <th>{{ ucwords('udated_at') }}</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ ucwords($item->name) }}</td>
                                            <td>
                                                <img src="{{ asset('assets/img/shop/' . $item->image) }}"
                                                    alt="{{ $item->image }}" style="width:120px; height:150px;">
                                            </td>
                                            <td>{{ $item->slug }}</td>
                                            <td>{{ $item->s_description }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->specification }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->stock }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->category_id }}</td>
                                            <td>{{ $item->c_slug }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->updated_at }}</td>
                                            <th>
                                                <a href="/admin/product/edit{{ $item->id }}"
                                                    class="btn btn-sm btn-warning"><i class="fa fa-edit"
                                                        aria-hidden="true"></i></a>
                                                -
                                                <a href="/admin/product/destroy{{ $item->id }}"
                                                    class="btn btn-sm btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
