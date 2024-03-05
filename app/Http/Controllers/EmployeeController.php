<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function createEmployee()
    {
        $departments = Department::all();
        return view('employees.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data,[
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'phone_number' => 'required',
            'department_id' => 'required|exists:departments,id',
            'is_available' => 'boolean',
        ]);

        if($validator->fails()){
            return response()->json(['status' => false,'errors' => $validator->getmessagebag()->toArray()],422);
        }

        Employee::create($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee created successfully.');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $departments = Department::all();
        return view('employees.edit', compact('employee', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = Validator::make($data,[
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,' . $id,
            'phone_number' => 'required',
            'department_id' => 'required|exists:departments,id',
            'is_available' => 'boolean',
        ]);

        if($validator->fails()){
            return response()->json(['status' => false,'errors' => $validator->getmessagebag()->toArray()],422);
        }

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }

    public function toggleAvailability($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->is_available = !$employee->is_available;
        $employee->save();

        return redirect()->back()->with('success', 'Employee availability toggled successfully.');
    }
}
