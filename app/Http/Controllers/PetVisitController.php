<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use DataTables;
use App\Models\Pet;
use Illuminate\Http\Request;
Use Illuminate\Database\QueryException;


class PetVisitController extends Controller
{   
    function __construct(){
        $isLogin = Session::get('is_login');
        if($isLogin == NULL){
            \Redirect::to('login')->send();
        }
    }

    #belum didaftarkan ke route
    public function saveNewVisit(Request $request){
        $data = $request->all();
    }
    
}
