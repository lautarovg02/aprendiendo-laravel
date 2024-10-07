<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    
    public function index(){
        $companies = Company::orderBy('company_name', 'ASC')->paginate();

        return view('companies.index', compact('companies'));
    }   
}
