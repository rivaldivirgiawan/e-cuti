@extends('layout.master')

@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Approval Cuti</h3>
                <div class="row">
                    <form class="navbar-form navbar-left">
                    </form>
                    <div class="col-md-13">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="right">
                                    <a href="/employee/employee-form" class="btn btn-primary"><i class="fa fa-plus"> TAMBAH</i></a>
                                    <a href="" class="btn btn-success"><i class="fa fa-download"></i> XLSX</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table id="table_id" class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tipe Cuti</th>
                                            <th>Alasan</th>
                                            <th>Periode</th>
                                            <th>Lama Cuti</th>
                                            <th>Alamat Cuti</th>
                                            <th>Atasan</th>
                                            {{-- <th>Status</th> --}}
                                            <th>Aksi Approval</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($leaves as $leave)
                                        <tr>
                                            <td>{{ $leave->employee->fullname }}</td>
                                            <td>{{ $leave->leave_type->name }}</td>
                                            <td>{{ $leave->reason }}</td>
                                            <td>{{ $leave->period_start }} s.d {{ $leave->period_end }}</td>
                                            <td>{{ $leave->days }} Hari</td>
                                            <td>{{ $leave->address }}</td>
                                            <td>{{ $leave->supervisor->name }}</td>
                                            {{-- <td><span class="label {{ ($leave->status_approval == 5) ? 'label-warning' : 'label-success' }}">{{ ($leave->status_approval == 5) ? 'Pending' : 'Approved' }}</span></td> --}}
                                            <td><button class="btn btn-default"><a href="#" class="status" data-type="select" data-pk="{{ $leave->id }}" data-url="/api/leave/{{ $leave->id }}/editstatus" data-title="Approval">@switch($leave->status_approval)
                                                @case(0)
                                                    <span>TIDAK DISETUJUI</span>
                                                    @break
                                            
                                                @case(1)
                                                    <span>DISETUJUI</span>
                                                    @break
                                            
                                                @case(5)
                                                    <span>DITANGGUHKAN</span>
                                                    @break

                                                @case(3)
                                                    <span>PERUBAHAN</span>
                                                    @break

                                                @endswitch</a></button></td>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script>
var source = [{'value': 5, 'text': 'DITANGGUHKAN'}, {'value': 1, 'text': 'DISETUJUI'}, {'value': 0, 'text': 'TIDAK DISETUJUI'},{'value': 3, 'text': 'PERUBAHAN'}];

$('.status').editable({
        'mode'  : 'popup',
        'source': function() {
            return source;
        },
    });
</script>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
@endsection
