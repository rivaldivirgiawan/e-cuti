<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Unit;
use App\Models\Position;
use Carbon\Carbon;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
       

        return view('employee.index', compact('employees'));
    }

    public function showForm()
    {
        $work_units = Unit::all();
        $positions = Position::all();

        return view('employee.employee-form', compact('work_units', 'positions'));
    }

    public function create(Request $request)
    {
        $employees = Employee::create($request->all());

        return redirect('/employee')->with('Sukses, Karyawan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        $work_units = Unit::all();
        $positions = Position::all();

        return view('/employee/edit', compact('employee', 'work_units', 'positions'));
    }

    public function update(Request $request,$id)
    {
        $employee = Employee::find($id);
    	$employee->update($request->all());
    	return redirect('/employee')->with('sukses','Data Berhasil diupdate');
    }

    public function delete($id)
    {
        $employee = Employee::find($id);
    	$employee->delete($employee);
    	return redirect('/employee')->with('sukses','Data Berhasil dihapus');
    }

    public function employeeDetail($id)
    {

        $employee = Employee::find($id);
        $employee->birthdate = Carbon::parse($employee->birthdate)->format('d F Y');
        $work_unit = Unit::all();
        $position = Position::all();

         return view('employee.employee-detail', compact('employee', 'work_unit', 'position')); 

    }

    public function exportExcel()
	{
		return Excel::download(new EmployeeExport, 'karyawan.xlsx');
	}
}
