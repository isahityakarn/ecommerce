@extends('admin/base')
@section('mycss')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection
@section('myjs')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable({
                "order": [
                    [0, "desc"]
                ]
            });
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
                                <a href="/admin/investoradd" class="btn btn-primary">Create</a>
                            </div>

                        </div>
                        <div class="card-body">
                            <table id="mytable" class="table table-striped table-sm cell-border compact">
                                <thead>
                                    <tr>
                                        <th>{{ ucwords('id') }}</th>
                                        <th>{{ ucwords('name') }}</th>
                                        <th>{{ ucwords('slug') }}</th>
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
                                            <td>{{ $item->slug }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->updated_at }}</td>
                                            <th>
                                                <a href="/admin/category/edit{{ $item->id }}"
                                                    class="btn btn-sm btn-warning"><i class="fa fa-edit"
                                                        aria-hidden="true"></i></a>
                                                -
                                                <a href="/admin/category/destroy{{ $item->id }}"
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
