<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class DashboardController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$products = DB::table('products')->get();
    	$categories = DB::table('categories')->get();

    	// mengirim data pegawai ke view index
    	return view('dashboard.index',['products' => $products, 'categories' => $categories]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        $categories = DB::table('categories')->get();
        // $user = DB::table('users')->where('id', Auth::id())->first();
        // memanggil view tambah
        return view('dashboard.tambah', ['categories' => $categories]);

    }

    public function store(Request $request)
    {
        $file = $request->file('image');


        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'product_image';
        $file->move($tujuan_upload,$nama_file);


        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'image' => $nama_file
        ]);


	return redirect('/dashboard');

    }

    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$products = DB::table('products')->where('id',$id)->get();
    $categories = DB::table('categories')->get();

	// passing data products yang didapat ke view edit.blade.php
	return view('dashboard.edit',['products' => $products], ['categories' => $categories]);

    }

    // update data pegawai
    public function update(Request $request)
    {

        $file = $request->file('image');


            $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'product_image';
            $file->move($tujuan_upload,$nama_file);

            DB::table('products')->where('id',$request->id)->update([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'image' => $nama_file
            ]);



        // // update data pegawai
        // if($request->file('image')){
        //     DB::table('products')->where('id',$request->id)->update([
        //         'name' => $request->name,
        //         'category_id' => $request->category_id,
        //         'price' => $request->price,
        //         'image' => $nama_file
        //     ]);
        // }else{
        //     DB::table('products')->where('id',$request->id)->update([
        //         'name' => $request->name,
        //         'category_id' => $request->category_id,
        //         'price' => $request->price,

        //     ]);
        // }
        // alihkan halaman ke halaman pegawai
        return redirect('/dashboard');
    }
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('products')->where('id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/dashboard');
    }

    // Category
    public function indexcat()
    {
    	// mengambil data dari table pegawai
    	$categories = DB::table('categories')->get();

    	// mengirim data pegawai ke view index
    	return view('dashboard.category.index',[ 'categories' => $categories]);

    }
    public function tambahcat()
    {

        return view('dashboard.category.tambah');

    }

    public function storecat(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
	    return redirect('/dashboard/category');

    }
    public function editcat($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $categories = DB::table('categories')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('dashboard.category.edit',['categories' => $categories]);

    }
        // update data pegawai
    public function updatecat(Request $request)
    {
        // update data pegawai
        DB::table('categories')->where('id',$request->id)->update([
            'name' => $request->name,

        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/dashboard/category');
    }
    public function hapuscat($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('categories')->where('id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/dashboard/category');
    }

}
