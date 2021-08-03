<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cartModel;
use App\Product;
use Auth;

class frontProductController extends Controller
{

    /**
    * @param Request $request
    */
    public function index(Request $request){

        $Product = Product::when($request->keyword, function ($query) use ($request) {
            $query->where('title', 'like', "%{$request->keyword}%")
                ->orWhere('subtitle', 'like', "%{$request->keyword}%");
        })->paginate($request->limit ?? 20);

        return view('welcome', compact('Product'));
    }

    public function cart(Request $request){

        $Product = cartModel::where('status_order',0)->when($request->keyword, function ($query) use ($request) {
            $query->where('title', 'like', "%{$request->keyword}%")
                ->orWhere('subtitle', 'like', "%{$request->keyword}%");
        })->paginate($request->limit ?? 20);
          
        $user = Auth::user()->id;

          return view('front.cart', compact('Product', 'user'));
    }

    public function sukses_order(Request $request){
    
          return view('front.sukses-order');
    }

}
