@extends('layout.master')

@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
@endsection

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">List Cuti</h3>
                <div class="row">
                    <form class="navbar-form navbar-left">
                    </form>
                    <div class="col-md-13">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="right">
                                    <a href="/leave/leave-form" class="btn btn-primary"><i class="fa fa-plus"> TAMBAH</i></a>
                                    <a href="" class="btn btn-success"><i class="fa fa-download"></i> XLSX</a>
                                </div>
                            </div>
                            <a href="/leave/print-leave" class="btn btn-danger" target="_blank"><i class="fa fa-download"></i> CETAK FORMULIR CUTI</a>
                            <div class="panel-body">
                                <table id="table_id" class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tipe Cuti</th>
                                            <th>Alasan</th>
                                            <th>Periode</th>
                                            <th>Lama Cuti</th>
                                            <th>Status Approval</th>
                                            {{-- <th>Masa Aktif</th> --}}
                                            <th>Atasan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($leaves as $leave)
                                        <tr>
                                            <td>{{ $leave->employee->fullname }}</td>
                                            <td>{{ $leave->leave_type->name }}</td>
                                            <td>{{ $leave->reason }}</td>
                                            <td>{{ $leave->period_start }} s.d <br>{{ $leave->period_end }}</td>
                                            <td>{{ $leave->days }} Hari</td>
                                            <td>@switch($leave->status_approval)
                                                @case(0)
                                                    <span class="label label-danger">TIDAK DISETUJUI</span>
                                                    @break
                                            
                                                @case(1)
                                                    <span class="label label-success">DISETUJUI</span>
                                                    @break
                                            
                                                @case(5)
                                                    <span class="label label-warning">DITANGGUHKAN</span>
                                                    @break

                                                @case(3)
                                                    <span class="label label-info">PERUBAHAN</span>
                                                    @break

                                                @endswitch</td>
                                            {{-- <td><span class="label {{ ($leave->status == 1) ? 'label-success' : 'label-danger' }}">{{ ($leave->status == 1) ? 'Aktif' : 'Tidak Aktif' }}</span></td> --}}
                                            <td>{{ $leave->supervisor->name }}</td>
                                            <td><a href="" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></a>
                                                <a href="" style="inline-block" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
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
