<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Employee;
use Illuminate\Support\Facades\Log;


class TaskController extends Controller
{
    public function index(): View
    {
        $employeeData = Employee::all();
        Log::info("employee data: ". $employeeData);
        return view('CRUDTable')->with('employeeData',$employeeData);
    }

    public function createDate(): View
    {
        return view('CRUDForm');
    }

    public function insertData(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|numeric'
        ]);
        
        $input = $request->all();
            Log::info("the inserted data ", $input);
            Employee::create($input);
            return redirect('FormView')->with('flash message', 'student added');
    }

    public function updateForm(Request $request, $id){
        // $data = $request->input('id');
       $data = Employee::find($id);
        return view('updateView')->with('data', $data);
    }

    public function updateData(Request $request, $id){
        $employee = Employee::find($id);
        if(!$request->has('email') || $request->input('email')  == null){
            return redirect()->back()->withErrors(['Email' => "email is required"]);
        }

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->number = $request->input('number');


        $employee->save();
        // $input = $request->all();
        // Employee::save($emplyee);

        Log::info("the updated data ". $employee);
        return redirect('/FormView')->with('flash_message', 'employee updated');
    }



    public function deleteData(Request $request, $id){
        // $data = $request->input('id');

        $data = Employee::find($id);
        $data->delete($id);
        Log::info("the data is destroyed ". $data);
        return redirect('/TableView')->with('flash message', "data has been deleted");
    }
}
