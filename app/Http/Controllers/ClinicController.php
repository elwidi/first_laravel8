<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Models\Clinic;
use Illuminate\Http\Request;
Use Illuminate\Database\QueryException;

class ClinicController extends Controller
{
    public function __construct(){
        $isLogin = Session::get('is_login');
        if($isLogin == NULL){
            \Redirect::to('login')->send();
        }
    }

    public function index(){

    }

    public function showClinic(){
        $clinic = Clinic::all();
        $data = [
            'clinics' => $clinic

        ];
        return view('clinic.showClinic', $data);
    }
}
