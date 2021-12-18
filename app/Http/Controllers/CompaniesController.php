<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class CompaniesController extends Controller
{
    
    public function index(){
        $companies= Companies::paginate(10);

        return view("companies.index",["companies" => $companies]);
    }

    public function create(){
        return view('companies.create');
    }
    
    public function store(Request $request){
        $company= new Companies;

        $company->name= $request->validate(["name" => "required| min:3"])["name"];
        $company->email= $request->validate(["email" => "email"])["email"];
        $company->phone= $request->validate(["phone" => "numeric"])["phone"];
        $company->address= $request->validate(["address" => "min:5"])["address"];
        $company->website= $request->Input("website");
        if($request->hasfile("logo")){
            $file= $request->file("logo");
            $ext= $file->getClientOriginalExtension();
            $filename= $company->name."Logo.".$ext;
            $file->move("../storage/app/public/logo",$filename);
            $company->logo= $filename;
        }
        $company->save();

        return redirect('/companies/'.$company->id);
    }

    public function show(Companies $company){
        return view('companies.show',['company' => $company]);
    }

    public function edit(Companies $company){
        return view('companies.edit',['company' => $company]);
    }

    public function update(Companies $company){

        $company->update($this->validatedData());
        
        return redirect('/companies'); 
    }

    public function destroy(Companies $company){

        $company->delete();
        
        return redirect('/companies');
    }

    protected function validatedData(){
        return request()->validate([
            'name' => 'required| min:3',
            'email' => 'email',
            'phone'=> 'numeric',
            'address'=> 'min:5',
        ]);
    }
}
