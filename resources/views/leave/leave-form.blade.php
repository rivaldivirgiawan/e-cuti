@extends('layout.master')
@section('header')

@endsection
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Form Cuti</h3>
                            </div>
                            <div class="panel-body">
                                <form action="/leave/create" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Nama Karyawan</label>
                                        <div class="col-sm-10">
                                            <select name="employee_id" class="form-control">
                                                <option value="">...</option>
                                                @foreach($employees as $employee)
                                                <option value="{{ $employee->id }}">{{ $employee->fullname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Jenis Cuti</label>
                                        <div class="col-sm-10">
                                            <select name="leave_type_id" class="form-control">
                                                <option value="">...</option>
                                                @foreach($leave_type as $leave_type)
                                                <option value="{{ $leave_type->id }}">{{ $leave_type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Alasan</label>
                                        <div class="col-sm-10">
                                            <select name="reason" class="form-control">
                                                <option value="">...</option>
                                                <option value="Sakit">Sakit</option>
                                                <option value="Karena Alasan Penting">Karena Alasan Penting</option>
                                                <option value="Melahirkan">Melahirkan</option>
                                                <option value="Diluar Tanggungan Negara">Diluar Tanggungan Negara</option>
                                                <option value="Liburan">Liburan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Periode Cuti</label>
                                        <div class="col-md-3 mb-3">
                                            <input name="period_start" class="form-control" type="date" id="example-date-input">
                                        </div>
                                          <div class="col-md-3 mb-3">
                                            <input name="period_end" class="form-control" type="date" id="example-date-input">
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Jumlah Hari</label>
                                        <div class="col-sm-10">
                                          <input name="days" type="text" class="form-control" id="" placeholder="Jumlah Hari">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Alamat saat cuti</label>
                                        <div class="col-sm-10">
                                          <textarea name="address" class="form-control" rows="4" placeholder="Alamat"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">No. Telp saat cuti</label>
                                        <div class="col-sm-10">
                                          <input name="phone" type="text" class="form-control" id="" placeholder="No. Telp saat cuti">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Atasan Langsung</label>
                                        <div class="col-sm-10">
                                            <select name="supervisor_id" class="form-control">
                                                <option value="">...</option>
                                                @foreach($supervisors as $supervisor)
                                                <option value="{{ $supervisor->id }}">{{ $supervisor->name }} ({{ $supervisor->position }})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Save</i></button>
                                        <a href="/leave" class="btn btn-deafult"><i class="fa fa-arrow-left"> Cancel</i></a></td>
                                      </div>
                                    </div>
                                  </form>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection

@section('footer')
    
@endsection