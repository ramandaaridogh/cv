<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests; 

class _DataCustomer extends Controller
{
    public function index()
    {
      $data = DB::table('tbl_customer')
      ->join('tbl_kampus', 'tbl_customer.id_kampus', '=', 'tbl_kampus.id_kampus')
      ->select('tbl_customer.*', 'tbl_kampus.kampus')
      ->get();
      //dd($data);

      return view('blog/data_customer', ['data' => $data]);
    }
}
