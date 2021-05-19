@extends('layout.master')

@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
@endsection

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Karyawan</h3>
                <div class="row">
                    <form class="navbar-form navbar-left">
                    </form>
                    <div class="col-md-13">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="right">
                                    <a href="/employee/employee-form" class="btn btn-sm btn-primary"><i class="fa fa-plus">  TAMBAH</i></a>
                                    <a href="/employee/exportexcel" class="btn btn-sm btn-success"><i class="fa fa-download"></i>  XLSX </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table id="table_id" class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Telpon</th>
                                            <th>Unit Kerja</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{ $employee->nip }}</td>
                                            <td>{{ $employee->fullname }}</td>
                                            <td>{{ $employee->address }}</td>
                                            <td>{{ $employee->phone_number }}</td>
                                            <td>{{ $employee->work_unit->name }}</td>
                                            <td>{{ $employee->position->position_name }}</td>
                                            <td>{{ $employee->status_label }}</td>
                                            <td><a href="/employee/{{ $employee->id }}/detail" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></a>
                                                <a href="/employee/{{ $employee->id }}/edit" style="inline-block" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="/employee/{{ $employee->id }}/delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
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
    </div>
@endsection

@section('footer')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#table_id').DataTable();
} );
    </script>
@endsection