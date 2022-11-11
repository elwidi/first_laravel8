<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use DataTables;
use App\Models\PetVisit;
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

    public function dtJson(){
        return Datatables::of( PetVisit::with(['pet.owner'])->get())->make(true);
    }

    public function visitList(){
        return view('visit.visitList');
    }

    public function saveNewVisit(Request $request){
        $data = $request->all();
        $data->status = 'Pending';

        try{
            $visit = PetVisit::create($data);
            $response = [
                'status' => 200,
                'message' => 'data ok saved.'
            ];
        } catch(QueryException $e){
            $response = [
                'status' => 400,
                'message' => $e->errorInfo
            ];
        }

        echo json_encode($response);
        exit;
    }

    #understanding eloquent relation
    public function cekiData(){
        $data = PetVisit::with(['pet.owner'])->get();
        foreach($data as $i => $y){
            dd($y->pet);
        }
    }
    
}
