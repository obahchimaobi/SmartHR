<?php

namespace App\Http\Controllers;

use App\Models\Employee;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    //
    public function employee_login()
    {
        return view('auth.employee-login');
    }

    public function employee_register()
    {
        return view('auth.employee-register');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        $fields = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'employee_id' => 'required',
            'department' => 'required',
            'employment_status' => 'required',
            'date_joined' => 'required',
            'employment_type' => 'required',
            'employee_email' => 'required',
            'employee_password' => 'required|confirmed|min:6',
            // 'profile_picture' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $fields['employee_password'] = Hash::make($request->employee_password);

        if ($request->hasFile('profile_picture')) {

            $fields['profile_picture'] = $request->file('profile_picture')->store('employees', 'public');

            $file = $request->file('profile_picture');

            $filePath = 'employees/' . $file->getClientOriginalName();

            // Check if the file already exists
            if (Storage::disk('public')->exists($filePath)) {

                Log::info('File already exists: ' . $filePath);

            } else {
                // Store the file and get its path
                $fields['item_image'] = $file->storeAs('product_image', $file->getClientOriginalName(), 'public');

                // Log the path of the stored file
                Log::info('Stored image path: ' . $fields['item_image']);
            }
        }

        Employee::create($fields);

        return redirect()->route('employee.login')->with('success', 'Employee registered successfully');
    }

    public function login(Request $request)
    {
        $request->validate([
            'employee_email' => 'required',
            'employee_password' => 'required',
        ]);

        if (Auth::guard('employee')->attempt(['employee_email' => $request->employee_email, 'password' => $request->employee_password])) {
            
            return redirect()->route('employee.dashboard')->with('success', 'Login Successful');
        } else {

            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    public function employee_dashboard()
    {
        return view('components.employee-dashboard');
    }
}
