<?php

namespace App\Http\Controllers;

use App\Models\Buku;
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
        $buku = Buku::all();
        return view('myHome', ['posts' => $buku, 'no' => 1]);
    }
}
