<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Type;
use App\Models\Supervisor;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class LeaveController extends Controller
{
    public function index()
    {
        $leaves = Leave::all();
        $leave_type = Type::all();
        $supervisor = Supervisor::all();

        return view('leave.index', compact('leaves', 'leave_type', 'supervisor'));
    }

    public function showForm()
    {
        $employees = Employee::all();
        $leave_type = Type::all();
        $supervisors = Supervisor::all();

        return view('leave.leave-form', compact('employees', 'leave_type', 'supervisors'));
    }

    public function create(Request $request)
    {
        $leave = Leave::create($request->all());

        return redirect('/leave')->with('Sukses, Karyawan berhasil ditambahkan');
    }

    public function approval()
    {
        $leaves = Leave::all();
        $leave_type = Type::all();
        $supervisor = Supervisor::all();

        return view('leave.approval', compact('leaves', 'leave_type', 'supervisor'));
    }

    public function detail()
    {
        return view('leave.leave-detail');
    }

    public function printLeave()
    {

        $pdf = PDF::loadview('leave.leave-detail');
        return $pdf ->stream('leave.leave-detail');
    }


    
}
