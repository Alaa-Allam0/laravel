<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employees;
use App\Models\Companies;

class EmployeesController extends Controller
{
    public function index(){
        $employees= Employees::paginate(10);

        return view('employees.index',["employees" => $employees]);
    }
   
    public function create(){
        return view('employees.create',["companies" => Companies::all()]);
    }

    public function store(Request $request){
        $employee= new Employees;

        $employee->firstName= $request->validate(["firstName" => "required| min:3"])["firstName"];
        $employee->lastName= $request->validate(["lastName" => "required| min:3"])["lastName"];
        $employee->email= $request->validate(["email" => "email"])["email"];
        $employee->phone= $request->validate(["phone" => "numeric"])["phone"];
        $employee->address= $request->validate(["address" => "min:5"])["address"];
        $employee->company_id= $request->Input("company_id");
        $employee->save();

        return redirect('/employees/'.$employee->id);
    }

    public function show(Employees $employee){
        return view('employees.show',['employee' => $employee]);
    }

    public function edit(Employees $employee){
        return view('employees.edit',['employee' => $employee]);   
    }

    public function update(Employees $employee){
        $employee->update($this->validatedData());

        return redirect('/employees');
    }

    public function destroy(Employees $employee){
        $employee->delete();

        return redirect('/employees');
    }

    protected function validatedData(){
        return request()->validate([
            'firstName' => 'required| min:3',
            'lastName' => 'required| min:3',
            'email' => 'email',
            'phone'=> 'numeric',
            'address'=> 'min:5',
        ]);
    }
}
