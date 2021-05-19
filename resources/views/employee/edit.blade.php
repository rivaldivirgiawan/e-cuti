@extends('layout.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Form Karyawan</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/employee/{{ $employee->id }}/update" method="post">
                                {{csrf_field()}}
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label">NIP</label>
                                  <div class="col-sm-10">
                                    <input name="nip" type="text" class="form-control" id="inputEmail3" placeholder="NIP" value="{{ $employee->nip }}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="" class="col-sm-2 col-form-label">Nama</label>
                                  <div class="col-sm-10">
                                    <input name="fullname" type="text" class="form-control" id="" placeholder="Nama" value="{{ $employee->fullname }}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select name="gender" class="form-control">
                                            <option value="L" @if($employee->gender == 'L') selected @endif>Laki-laki</option>
                                            <option value="P" @if($employee->gender == 'P') selected @endif>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Tempat, Tangggal Lahir</label>
                                    <div class="col-md-3 mb-3">
                                        <input name="birthplace" type="text" class="form-control" id="validationTooltip04" placeholder="Tempat Lahir" value="{{ $employee->birthplace }}" required>
                                    </div>
                                      <div class="col-md-3 mb-3">
                                        <input name="birthdate" class="form-control" type="date" value="{{ $employee->birthdate }}" id="example-date-input" value="{{ $employee->birthdate }}">
                                     </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                      <textarea name="address" class="form-control" rows="4" placeholder="Alamat">{{ $employee->address }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">No. Telp</label>
                                    <div class="col-sm-10">
                                      <input name="phone_number" type="text" class="form-control" id="" placeholder="No. Telp" value="{{ $employee->phone_number }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="" class="col-sm-2 col-form-label">Unit Kerja</label>
                                  <div class="col-sm-10">
                                      <select name="work_unit_id" class="form-control">
                                        @foreach($work_units as $work_unit)
                                          <option value={{$work_unit->id}}>{{$work_unit->name}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                                  <div class="col-sm-10">
                                      <select name="position_id" class="form-control">
                                        @foreach($positions as $position)
                                          <option value={{$position->id}}>{{$position->position_name}}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                      <div class="col-md-3 mb-3">
                                        <input name="entrydate" class="form-control" type="date" value="{{ $employee->entrydate }}" id="example-date-input" value="{{ $employee->entrydate }}">
                                     </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="status" class="form-control">
                                            <option value="1" @if($employee->status == '1') selected @endif>Aktif</option>
                                            <option value="0" @if($employee->status == '0') selected @endif>Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Save</i></button>
                                    <a href="/employee" class="btn btn-deafult"><i class="fa fa-arrow-left"> Cancel</i></a></td>
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