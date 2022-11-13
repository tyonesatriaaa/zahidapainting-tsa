<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CustAddress;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produk = Product::Select("*")
        ->orderBy("id", "desc")
        ->get();

        return view('user.home', compact('produk'));
     }


    public function dress()
    {
        //
        $produk = Product::where("category", 2)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'dress';

        return view('user.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }

    public function tasdandompet()
    {
        //
        $produk = Product::where("category", 1)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'Tas dan Dompet';
        return view('user.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }

    public function kebaya()
    {
        //
        $produk = Product::where("category", 3)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'Kebaya';

        return view('user.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }


    public function murah()
    {
        //
        $produk = Product::Select("*")
        ->orderBy("price", "asc")
        ->get();
        return view('user.home', compact('produk'));
        // return view('admin.home');

    }


    public function mahal()
    {
        //
        $produk = Product::Select("*")
        ->orderBy("price", "desc")
        ->get();
        return view('user.home', compact('produk'));
        // return view('admin.home');

    }

    public function cari(Request $request){
        $search = $request->get('search');
        $produk = Product::Select("*")
        ->where('name','like','%'.$search.'%')
        ->orWhere('price','like','%'.$search.'%')
        ->get();
        return view('user.home', compact('produk'));
    }



}
