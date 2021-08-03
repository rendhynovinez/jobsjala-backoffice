<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\cartModel;
use App\User;
use App\Customer;
use Auth;

class CartController extends Controller
{
    //

    public function store(Request $request)
        {

            //clear temp data
            DB::table('order_cart')->where('uid', $request->uid)->where('status_order',0)->delete();

           
            //Generate Code Invoice
            $getMaxCode = cartModel::where('status_order', 1)->max('code_key');

            $urutan = (int) substr($getMaxCode, 3, 3);

            $huruf = "INV";

            $urutan++;

            $kodeBarang = sprintf("%06s", $urutan);

            $kodeBarang;

            $year = date("dmY");

            $year = substr( $year, -2 );

            $date_month = date("dm");
    
            $code = $huruf.$date_month.$year.$kodeBarang;

            
            // Create Percent
            $Customer = Customer::where('id', $request->uid)->first();

            $percent = User::where('id', $Customer->sales_id)->first();

            
            foreach($request->data as $data) {
                cartModel::create([
                    'code_key' =>$kodeBarang,
                    'order_numb'=> $code,
                    'id_product'=> $data['id'],
                    'qty'=> $data['qty'],
                    'img'=> $data['img'],
                    'height'=> $data['height'],
                    'length'=> $data['length'],
                    'price'=> $data['price'],
                    'subtitle'=> $data['subtitle'],
                    'title'=> $data['title'],
                    'weight'=> $data['weight'],
                    'width'=>$data['width'],
                    'uid' => $request->uid,
                    'store_name' => $Customer->store_name,
                    'cus_name' => $Customer->username,
                    'status_order' => 0,
                    'percent' => $percent->percent
                ]);

             
            }

            return response()->json(['response'=> 'Status Berhasil']);
        }


        public function ordersend(Request $request)
        {


            $affected = DB::table('order_cart')->where('uid', '=', $request->uid)->update(array('status_order' => 1));
          

            return response()->json(['response'=> 'Status Berhasil']);
        }
    
}
