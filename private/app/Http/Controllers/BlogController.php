<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests; 

class BlogController extends Controller
{
    public function index()
    {
      return view('blog/home');
    }

    // public function show($id)
    // {
    //   $nilai = "Nilai =" . $id;
      
    //   // QUERY SELECT
    //   //$users = DB::table('tbl_user')->where('username', 'ramandaaridogh')->get();
    //   //dd($users); ============> Komen dd ini untuk ngeliat result error lebih spesifik dan ngeliat juga result yang sifatnya true jika run.

    //   // QUERY INSERT
      

    //   DB::table('tbl_user')->insert([
    //     ['username' =>'testing', 'password'=>md5('duhapaya')]
    //   ]);

      

    //   DB::table('tbl_user')
    //   ->where('username','ramandaaridogh')
    //   ->update(['username' =>'ramandaaridogh']);

    //   $users = DB::table('tbl_user')->get();



    //   return view('blog/single', ['blog' => $nilai, 'users' => $users]);
    // }
}
