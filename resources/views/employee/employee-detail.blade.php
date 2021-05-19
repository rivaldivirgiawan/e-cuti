@extends('layout.master')

@section('header')
@endsection

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="{{asset('admintemplate/assets/img/user-medium.png')}}" class="img-circle" alt="Avatar">
                                <h3 class="name">{{ $employee->fullname }}</h3>
                                <span>{{ $employee->status_label }}</span>
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                        45 <span>Projects</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        15 <span>Awards</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        2174 <span>Points</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Basic Info</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>NIP <span>{{ $employee->nip }}</span></li>
                                    <li>Nama <span>{{ $employee->fullname }}</span></li>
                                    <li>Jenis Kelamin <span>{{ $employee->gender }}</span></li>
                                    <li>Tempat, Tanggal Lahir <span>{{ $employee->birthplace }}, {{ $employee->birthdate }}</span></li>
                                    <li>Alamat <span>{{ $employee->address }}</span></li>
                                    <li>No Telpon <span>{{ $employee->phone_number }}</span></li>
                                    <li>Status <span>{{  $employee->status_label }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <!-- TABBED CONTENT -->
                        <div class="custom-tabs-line tabs-line-bottom left-aligned">
                            <ul class="nav" role="tablist">
                                <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Cuti Pending</a></li>
                                <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Histori Cuti</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-bottom-left1">
                                <table class="table project-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Progress</th>
                                            <th>Leader</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tbody>
                                </table>
                                <div class="margin-top-30 text-center"><a href="#" class="btn btn-default">See all activity</a></div>
                            </div>
                            <div class="tab-pane fade" id="tab-bottom-left2">
                                <div class="table-responsive">
                                    <table class="table project-table">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Progress</th>
                                                <th>Leader</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END TABBED CONTENT -->
                        <!-- AWARD -->
                        <div class="awards">
                            <div class="row">
                                <h4 class="heading">Samuel's Awards</h4>
                                <div class="col-md-3 col-sm-6">
                                    <div class="award-item">
                                        <div class="hexagon">
                                            <span class="lnr lnr-apartment award-icon"></span>
                                        </div>
                                        <span>Unit Kerja <br>{{ $employee->work_unit->name }}</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="award-item">
                                        <div class="hexagon">
                                            <span class="lnr lnr-user award-icon"></span>
                                        </div>
                                        <span>{{ $employee->position->position_name }}</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="award-item">
                                        <div class="hexagon">
                                            <span class="lnr lnr-magic-wand award-icon"></span>
                                        </div>
                                        <span>Problem Solver</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="award-item">
                                        <div class="hexagon">
                                            <span class="lnr lnr-heart award-icon"></span>
                                        </div>
                                        <span>Most Loved</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center"><a href="#" class="btn btn-default">See all awards</a></div>
                        <!-- END AWARD -->
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection