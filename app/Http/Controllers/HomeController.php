<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Item;
use Illuminate\Support\Facades\DB;
Use Illuminate\Database\QueryException;


class HomeController extends Controller
{

    public function __construct(){
        $isLogin = Session::get('is_login');
        if($isLogin == NULL){
            \Redirect::to('login')->send();
        }
    }

    public function myHome(){
        return view('myHome');
    }

    public function testLabel(){
        $buku = DB::table('buku')->get();
        dd($buku);
    }
}
