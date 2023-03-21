<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function Logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'User Logged Out Successfully',
            'alert-type' => 'warning'
        );

        return redirect('/login')->with($notification);
    } //end method

    public function EmployeePage()
    {
        $employee_details = DB::table('employees')->select('*')->get();
        return view('employeeinput', compact('employee_details'));
    } //end method
    public function SubmitEmployee(Request $request)
    {
    } //end method
    public function EditEmployee()
    {
    } //end method
    public function UpdateEmployee()
    {
    } //end method
    public function DeleteEmployee()
    {
    } //end method

}
