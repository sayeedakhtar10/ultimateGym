<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function registration(Request $request)
    {
        return view('registration');
    }

    public function createApplicant(Request $request)
    {
        $request->validate([
            'applicant_name' => 'required|max:50|regex:/^[\pL\s]+$/u', //validating only character values
            'mobile_no' => 'required|regex:/^[789]\d{9}$/',
            'alt_mobile_no' => 'required|regex:/^[789]\d{9}$/',
            'gender' => 'required|regex:/^[\pL\s]+$/u',
            'date_of_birth' => 'date_format:d/m/Y|before:tomorrow|required',
            'address' => 'required',
            'date_of_admission' => 'date_format:d/m/Y|before:tomorrow|required',
        ]); 
        DB::table('registration')
        ->insert([ 
            'applicant_name' => $request->input('applicant_name'), 
            'date_of_birth' => $request->input('date_of_birth'), 
            'address' => $request->input('address'), 
            'date_of_admission' => $request->input('date_of_admission'), 
        ]);

        $product_id = DB::getPdo()->lastInsertId();
        return redirect()->back()->with('status_success', 'Data Saved Successfully.');
        
    }

}