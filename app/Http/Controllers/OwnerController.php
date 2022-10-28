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

        $fileName = time().'_'.$request->file->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

        $data['file_name'] = $fileName;
        $data['file_path'] = '/storage/'.$filePath;

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

    public function ownerDetailAjax($id){
        $owner = Owner::find($id);

        if(!empty($owner)){
            $response = [
                'status' => 200,
                'message' => 'load data ok.',
                'data' => $owner
            ];
        } else {
            $response = [
                'status' => 400,
                'message' => 'data empty.'
            ];
        }

        echo json_encode($response); exit;

        
    }

    public function ownerDelete($id)
    {
        $deletedRows = Owner::where('id', $id)->delete();
        $response = [
            'status' => 200,
            'message' => 'success delete'
        ];

        echo json_encode($response); exit;
    }
}
