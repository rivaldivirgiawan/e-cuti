<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;

class ApiController extends Controller
{
    public function editStatus(Request $request, $id)
    {
        $leave = Leave::find($id);
        $leave->status_approval = $request->value;
        $leave->save();

        // $leave->update($request->pk, ['status_approval' => $request->value]);
    }
}
