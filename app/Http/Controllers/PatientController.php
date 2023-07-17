<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PatientController extends Controller
{
   public function showPatient(){
    $patients = DB::table('patients')->select('patients.*','users.city_name')
                   ->join('users','patients.city','=','users.id')
                   ->get();
        // return $patients;
        return view('welcome',compact('patients'));
   }
}
