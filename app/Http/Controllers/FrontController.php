<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Marketing;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        $products = Product::all();
        $services = Service::all();
        $marketings = Marketing::all();
        return view('master.front-end.master', compact('products', 'services', 'marketings'));
    }

    public function show()
    {
        $products = Product::all();
        $services = Service::all();
        $marketings = Marketing::all();
        return view('front-end.show', compact('products', 'services', 'marketings'));
    }

    public function priceDetail($id)
    {
        $price = Product::find($id);
        $products = Product::all();
        $services = Service::all();
        $marketings = Marketing::all();
        return view('front-end.price', compact('products', 'services', 'price', 'marketings'));
    }

    public function allBlogs()
    {
        $recentBlogs = Blog::OrderBy('id', 'desc')->take('3')->get();
        $products = Product::all();
        $services = Service::all();
        $marketings = Marketing::all();
        return view('front-end.blog', compact('products', 'services', 'recentBlogs', 'marketings'));
    }

    public function detail($id)
    {
        $blog = Blog::find($id);
        $products = Product::all();
        $services = Service::all();
        $marketings = Marketing::all();
        return view('front-end.detail', compact('products', 'services', 'blog', 'marketings'));
    }

    public function localSeo()
    {
        $products = Product::all();
        $services = Service::all();
        $marketings = Marketing::all();
        return view('front-end.localseo', compact('products', 'services', 'marketings'));
    }
}
