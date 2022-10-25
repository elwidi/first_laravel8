<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use DataTables;
use App\Models\Owner;
use Illuminate\Http\Request;
Use Illuminate\Database\QueryException;


class OwnerController extends Controller
{
    public function __construct(){
        $isLogin = Session::get('is_login');
        if($isLogin == NULL){
            \Redirect::to('login')->send();
        }
    }

    public function addOwner(){
        return view('addOwner');
    }

    public function storeOwner(Request $request){

        try{
            $buku = $request->all();
            Owner::create($buku);
            return redirect('my-home');
        } catch(QueryException $e){
            dd($e->errorInfo);
        }

    }


    public function json(){
        return Datatables::of(Owner::all())->make(true);
    }

    public function ownerList(){
        return view('ownerList');
    }


    public function saveOwnerAjax(Request $request){

        $data = $request->all();

        try{
            $owner = Owner::create($data);
            $response = [
                'status' => 200,
                'message' => 'data ok saved.'
            ];
        } catch(QueryException $e){
            $response = [
                'status' => 200,
                'message' => $e->errorInfo
            ];
        }
        
        echo json_encode($response);
        exit;

    }
}
