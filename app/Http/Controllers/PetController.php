<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use DataTables;
use App\Models\Pet;
use Illuminate\Http\Request;
Use Illuminate\Database\QueryException;

class PetController extends Controller
{
    function __construct(){
        $isLogin = Session::get('is_login');
        if($isLogin == NULL){
            \Redirect::to('login')->send();
        }
    }

    public function showPet(){
        return view('pet.showPet');
    }

    public function dtJson(){
        $pet = Pet::join('owner', 'pet.owner_id', '=', 'owner.id')->select(
            'owner.name as owner_name', 'pet.name', 'dob', 'species', 'race'
        );
        return Datatables::of($pet)->make(true);
    }
}
