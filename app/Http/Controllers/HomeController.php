<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;



class HomeController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$buket = DB::table('products')->where('category_id', '=', 4)->get();
    	$box = DB::table('products')->where('category_id', '=', 5)->get();
    	$meja = DB::table('products')->where('category_id', '=', 6)->get();
        $papan = DB::table('products')->where('category_id', '=', 7)->get();
        $panker = DB::table('products')->where('category_id', '=', 8)->get();
        $standing = DB::table('products')->where('category_id', '=', 9)->get();


    	// mengirim data pegawai ke view index
    	return view('home')->with([
            'buket' => $buket,
            'box' => $box,
            'meja' => $meja,
            'papan'=> $papan,
            'panker' => $panker,
            'standing' => $standing,
        ]);

    }
    public function detail($id)
    {
    	// mengambil data dari table pegawai
    	$products = DB::table('products')->where('id', $id)->get();

    	// mengirim data pegawai ke view index
    	return view('detail',['products' => $products]);

    }
}
