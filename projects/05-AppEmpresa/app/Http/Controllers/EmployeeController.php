<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Company $company){
        $employees =  Employee::where('company_id', $company->id)->paginate();
        return view('employees.index', compact('employees', 'company'));
    }
}
