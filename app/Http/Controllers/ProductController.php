<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use App\Product;
use App\cartModel;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();

        return view('admin.product', ['products' => $products]);
    }

    public function listorder()
    {


        $cart = cartModel::selectRaw('sum(qty) as sum_qty')
        ->selectRaw("sum(REPLACE(price, '$', '')) as sum_price")
        ->selectRaw("sum(REPLACE(price, '$', '') * qty) as grand_total")
        ->addSelect('order_numb')
        ->addSelect('uid')
        ->addSelect('percent')
        ->addSelect('store_name')
        ->addSelect('cus_name')
        ->with('GetUser')
        ->where('status_order', 1)
        ->groupBy('order_numb')
        ->get();




        return view('admin.cart', ['cart' => $cart]);
    }


    public function report_order($order_numb,$store_name)
    {

        $cart = cartModel::where('status_order', 1)->where('order_numb',$order_numb)->get();

        $total = 0;
        $total_qty = 0;

        foreach($cart as $key){
            $total += str_replace('$', '', $key->price) * $key->qty;
            $total_qty += $key->qty;
        }


        return view('admin.report-order', ['cart' => $cart, 'order_numb'=>$order_numb, 'store_name' => $store_name, 'total' => $total, 'total_qty' => $total_qty]);
    }
    

    public function store(Request $request)
    {

        try {
            $notification = array(
                'message' => 'Product data has been saved successfully!                ',
                'alert-type' => 'success'
            );

     

            $request->validate([
                'title'  => 'required',
                'subtitle' => 'required',
                'price' => 'required',
                'is_active' => 'required',
                'length' => 'required',
                'height' => 'required',
                'width' => 'required',
                'weight' => 'required'
            ]);


            if($request->hasFile('img')){

                $filenameWithExt = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $filenameSimpan = $filename.'_'.time().'.'.$extension;
                $path = $request->file('img')->storeAs('public/img',$filenameSimpan);

            }else{
                $notification = array(
                    'message' => 'Product Image failed to save!',
                    'alert-type' => 'success'
                );
                return Redirect::to('/product')->with($notification);
    
            }



            Product::create([
                'bg' => '',
                'img' => 'img/'.$filenameSimpan,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'price' => '$'.$request->price,
                'description' => $request->description,
                'status' => $request->is_active,
                'length' => $request->length,
                'height' => $request->height,
                'width' => $request->width,
                'weight' => $request->weight
            ]);

            return Redirect::to('/product')->with($notification);

        } catch (\Throwable $th) {


            $notification = array(
                'message' => 'Product data failed to save! ',
                'alert-type' => 'error'
            );
            return Redirect::to('/product')->with($notification);
        }
    }

    public function edit(Request $request)
    {

        try {

            $product = Product::find($request->id);

            if($request->hasFile('img')){

                $filenameWithExt = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $filenameSimpan = $filename.'_'.time().'.'.$extension;
                $path = $request->file('img')->storeAs('public/img',$filenameSimpan);
                $img_path = 'img/'.$filenameSimpan; 

            }else{
                $img_path = $product->img;
    
            }


            
            $product->bg = $request->bg;
            $product->img = $img_path;
            $product->title = $request->title;
            $product->subtitle = $request->subtitle;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->status = $request->is_active;
            $product->length = $request->length;
            $product->height = $request->height;
            $product->width = $request->width;
            $product->weight =$request->weight;

   

     
            
            $product->save();

            $notification = array(
                'message' => 'Product data has been updated successfully!                ',
                'alert-type' => 'success'
            );
            return Redirect::to('/product')->with($notification);
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Product data failed to update!',
                'alert-type' => 'error'
            );
            return Redirect::to('/product')->with($notification);
        }
    }


   
}
