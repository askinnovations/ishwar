<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;
use Carbon\Carbon;



class AttendanceController extends Controller
{
    public function index(Request $request)
    {
       $employees= Employee::all();
    
        return view('admin.attendance.index', compact('employees'));
    }

    public function update(Request $request)
    {
       
        $request->validate([
            'status' => 'required|in:present,absent,halfday',
            'employee_ids' => 'required|array',
            'employee_ids.*' => 'exists:employees,id',
            'remark' => 'nullable|string|max:255',
            'date' => 'required|date',
        ]);

        
        $date = Carbon::parse($request->date)->format('Y-m-d');

        foreach ($request->employee_ids as $employeeId) {
            Attendance::updateOrCreate(
                ['employee_id' => $employeeId, 'date' => $request->date],
                ['status' => $request->status, 'remark' => $request->remark]
            );
        }

        return redirect()->back()->with('success', 'Attendance updated successfully!');
    }

// {
//     $request->validate([
//         'status' => 'required|in:present,absent,halfday',
//         'employee_ids' => 'required|array',
//         'employee_ids.*' => 'exists:employees,id',
//         'remark' => 'nullable|string|max:255',
//         'date' => 'required|date',
//     ]);

//     $messages = [];

//     foreach ($request->employee_ids as $employeeId) {
//         $existing = Attendance::where('employee_id', $employeeId)
//             ->where('date', $request->date)
//             ->first();

//         // If already marked absent and trying to change to present
//         if ($existing && $existing->status == 'absent' && $request->status == 'present') {
//             $messages[] = "Employee ID {$employeeId} is already marked as absent today.";
//             continue;
//         }

//         // If already marked halfday and trying to change to present
//         if ($existing && $existing->status == 'halfday' && $request->status == 'present') {
//             $messages[] = "Employee ID {$employeeId} is already marked as halfday today.";
//             continue;
//         }

//          $remark = $request->remarks[$employeeId] ?? null;
//         //  dd($remark);
//         //  die;

//         Attendance::updateOrCreate(
//             ['employee_id' => $employeeId, 'date' => $request->date],
//             ['status' => $request->status, 'remark' => $remark]
//         );

//         $messages[] = "Employee ID {$employeeId} marked as {$request->status}.";
//     }

//     return back()->with('success', implode('<br>', $messages));
// }

}

