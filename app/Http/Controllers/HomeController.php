<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use App\Events\NewMessageNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\TransactionCustomers;
use App\CustomerOrderToMitra;
use App\detailServiceMitra;
use App\HistoryActivity;
use App\SaldoWallet;
use App\ServiceMitra;
use App\DetailMitra;
use App\Customers;
use App\MitraMaps;
use App\Message;
use App\User;
use FCM;




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
        return view('admin.dashboard');
    }

    // Message
    public function message()
    {

            $Massage = ServiceMitra::where('type', 1)->get();
            return view('customers.massage', ['Massage' => $Massage]);
    
    }

    // Cleaning
    public function cleaning()
    {
    
            $Cleaning = ServiceMitra::where('type', 2)->get();
            return view('customers.cleaning', ['Cleaning' => $Cleaning]);
        
    }

    // Education
    public function education()
    {
             $Education = ServiceMitra::where('type', 3)->get();
             return view('customers.education', ['Education' => $Education]);
            
    }

    public function detail($id)
    {
         
            $ServiceMitra = ServiceMitra::where('id', $id)->first(); 
            $detailServiceMitra = detailServiceMitra::where('id_service_mitra',$ServiceMitra->id)->get();
            return view('customers.detail', ['ServiceMitra' => $ServiceMitra, 'Id' => $id, 'detailServiceMitra' => $detailServiceMitra]);

    }

    
    public function rincian($id, $duration, $payment_method, $adress, $latitude, $longitude, $gender, $detail_alamat, $nomor_hp)
    {
               
            $ServiceMitra = ServiceMitra::where('id', $id)->first(); 
            $detailServiceMitra = DetailServiceMitra::where('id_service_mitra', $id)
            ->where('duration', $duration)->first();
            $description = $detailServiceMitra->description;


            return view('customers.detail-rincian', ['ServiceMitra' => $ServiceMitra, 'id' => $id,
             'payment_method' =>$payment_method,
             'gender' => $gender,
             'detail_alamat' => $detail_alamat,
             'adress' =>$adress,
             'latitude' =>$latitude,
             'longitude' =>$longitude,
             'description' => $description,
             'duration'=> $duration,
             'nomor_hp' => $nomor_hp]);
        
    }

    public function akhiri_mulai_layanan(Request $request){
        $UpdateCustomeOrderMitra = CustomerOrderToMitra::where('uid_mitra', $request->uid_mitra)
        ->orderBy('id', 'desc')->first();

        $MitraMaps = MitraMaps::where('uid', $request->uid_mitra)->first();

        $MitraMaps->update(['status_ready' => 0]);

        $UpdateCustomeOrderMitra->update(['status_mulai_layanan' => 1,'status_order' => 2]);

        return response()->json(['response'=> 'Status Berhasil']);
    }


    public function countdown($id,$duration, $payment_method, $adress, $latitude, $longitude, $gender, $detail_alamat, $nomor_hp) {
        $Servicemitra = ServiceMitra::where('id', $id)->first();
        $DetailServide = detailServiceMitra::where('id_service_mitra', $id)->first();
        $order_type = $Servicemitra->type;
        $description = $DetailServide->description;
        $layanan = $Servicemitra->title.'/'.$Servicemitra->name_service;
        
        return view('customers.agents',['name' => Auth::user()->name,
            'duration' => $duration,
            'adress' => $adress,
            'latitude' =>$latitude,
            'layanan' => $layanan,
            'gender' => $gender,
            'detail_alamat' => $detail_alamat,
            'description' => $description,
            'longitude' =>$longitude,
            'nomor_hp' => $nomor_hp,
            ]);
    }

    public function pencarian($id, $duration, $payment_method, $adress, $latitude, $longitude, $gender, $detail_alamat, $nomor_hp, $fcm) {
        
        //YANG BELUM
        // Hours setting untuk maps / jarak tempuh
        $hours = 30;
        $mitra_maps          =  DB::table("mitra_maps");
        $mitra_maps->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                                  * cos(radians(latitude)) * cos(radians(longitude) - radians(" . $longitude . "))
                               + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"));
        $mitra_maps->having('distance', '<=',10); // 10 KM
        $mitra_maps->orderBy('distance', 'asc');
        $mitra_maps = $mitra_maps->get();

        $Servicemitra = ServiceMitra::where('id', $id)->first();
        $DetailServide = detailServiceMitra::where('id_service_mitra', $id)->first();
        $order_type = $Servicemitra->type;
        $description = $DetailServide->description;
        $layanan = $Servicemitra->title.'/'.$Servicemitra->name_service;
        
        if($gender == "Pria"){
            $jk_customers = 1;
        }else{
            $jk_customers = 2;
        }
        

        //Cek Mitra Terdekat
        if($mitra_maps->isEmpty()){
            return view('customers.agents',['name' => Auth::user()->name,
            'duration' => $duration,
            'adress' => $adress,
            'latitude' =>$latitude,
            'layanan' => $layanan,
            'gender' => $gender,
            'detail_alamat' => $detail_alamat,
            'description' => $description,
            'longitude' =>$longitude,
            'nomor_hp' => $nomor_hp]);
            
        }else{



                // Cek riwayat terakhir Customer Yang sedang berjalan
                $cekCustomerOrder = CustomerOrderToMitra::where('uid_customer',Auth::user()->id)
                ->orderBy('id', 'DESC')->first();

            


                
                // Cek Jika Customer Tidak ada / DiTolak / Ready
                if(empty($cekCustomerOrder) || $cekCustomerOrder->status_order == '2'|| $cekCustomerOrder->status_order == '0'){
                        
                        //Cari Mitra Sekitar yang ready = 0
                        $mitra_ada = false;
                        foreach($mitra_maps as $mitraMaps) {
                            if($mitraMaps->status_ready == 0 && $mitraMaps->type == $order_type && $mitraMaps->jenis_kelamin == $jk_customers){
                                $uid_mitra_maps = $mitraMaps->uid;
                                $mitra_ada = true;
                                break;
                            }        
                        }
  

                        if($mitra_ada == false){
                            
                            // Jika Tidak Ada Kirim Ke Agent
                            return view('customers.agents',['name' => Auth::user()->name,
                            'duration' => $duration,
                            'adress' => $adress,
                            'latitude' =>$latitude,
                            'layanan' => $layanan,
                            'gender' => $gender,
                            'detail_alamat' => $detail_alamat,
                            'description' => $description,
                            'longitude' =>$longitude,
                            'nomor_hp' => $nomor_hp]);

                        }
                   
                }else if($cekCustomerOrder->status_order == '1'){
                    $data = DetailMitra::where('uid',$cekCustomerOrder->uid_mitra)->first();
                    $user = User::where('id',$cekCustomerOrder->uid_mitra)->first();
                    
                
                    return view('customers.suksesmencari',['name' => Auth::user()->name,
                    'data' => $data,
                    'uid_mitra' => $cekCustomerOrder->uid_mitra,
                    'user' => $user,
                    'nomor_hp'=> $nomor_hp]);
                }



  


                // Cek Kondisi Mitra yang Ready
                if($mitra_ada == true){

                        //prepare Customer Order To Mitra is being sent to socket
                        $CustomerOrderToMitra = new CustomerOrderToMitra;
                        $CustomerOrderToMitra->setAttribute('uid_customer',Auth::user()->id);
                        $CustomerOrderToMitra->setAttribute('id_service',$id);
                        $CustomerOrderToMitra->setAttribute('uid_mitra',$uid_mitra_maps);
                        $CustomerOrderToMitra->setAttribute('address',$adress);
                        $CustomerOrderToMitra->setAttribute('lat_customers',$latitude);
                        $CustomerOrderToMitra->setAttribute('lng_customers',$longitude);
                        $CustomerOrderToMitra->setAttribute('duration',$duration);
                        $CustomerOrderToMitra->setAttribute('nomor_hp',$nomor_hp);
                        $CustomerOrderToMitra->setAttribute('status_order', 0); // set send order
                        $CustomerOrderToMitra->save();

                        $detailServiceMitra = detailServiceMitra::where('id_service_mitra', $id)
                        ->where('duration',$duration)->first();
               

                        $TransactionCustomers = TransactionCustomers::create([
                            'payment_method' => $payment_method,
                            'uid_mitra' => $uid_mitra_maps, 
                            'id_customers' => Auth::user()->id, 
                            'amount' => $detailServiceMitra->amount, 
                            'uid' => Auth::user()->id
                        ]);

                            // Fire Base Send Message
                        $optionBuilder = new OptionsBuilder();
                        $optionBuilder->setTimeToLive(60*20);
                    
                        $notificationBuilder = new PayloadNotificationBuilder('SADULUR : ORDERAN BARU');
                        $notificationBuilder->setBody(Auth::user()->name.' Telah Menunggumu di '.$adress)
                                                ->setSound('sound');
                                        
                        $dataBuilder = new PayloadDataBuilder();
                        $dataBuilder->addData(['a_data' => 'my_data']);
                    
                        $option = $optionBuilder->build();
                        $notification = $notificationBuilder->build();
                        $data = $dataBuilder->build();
    
                        $user = User::where('id',$uid_mitra_maps)->first();
                   
                        if($user->fcm_token != null){
    
                                $token = $user->fcm_token;
                                $downstreamResponse = FCM::sendTo($token, $option, $notification, $data);
                        
                                $downstreamResponse->numberSuccess();
                                $downstreamResponse->numberFailure();
                                $downstreamResponse->numberModification();
                                                       
                                //prepare message is being sent to socket
      
                        }
    
                                               
                        //prepare message is being sent to socket
                        $message = new Message;
                        $message->setAttribute('from', Auth::user()->id);
                        //$message->setAttribute('from_fcm', $fcm);
                        $message->setAttribute('to', $mitraMaps->uid);
                        $message->setAttribute('message', 'Customer '.Auth::user()->name.' Melakukan Order To Mitra');
                        $message->save();

                        // Event Send Notification                               
                      event(new NewMessageNotification($message, $CustomerOrderToMitra, Auth::user()->name));
                        return view('customers.pencarian', ['mitra_maps' => $mitra_maps,
                        'name' => Auth::user()->name,
                        'duration' => $duration,
                        'adress' => $adress,
                        'latitude' =>$latitude,
                        'layanan' => $layanan,
                        'gender' => $gender,
                        'detail_alamat' => $detail_alamat,
                        'description' => $description,
                        'longitude' =>$longitude,
                        'nomor_hp' => $nomor_hp,
                        'id' => $id, 
                        'payment_method' => $payment_method]);

                }
  
         };


      
    }


    public function suksesmencari($id_mitra){
        $data = DetailMitra::where('id',$id_mitra)->first();
        $user = User::where('id',$data->uid)->first();
        
        return view('customers.suksesmencari',['data' => $data, 'user' => $user, 'uid_mitra' => $data->uid]);
    }

    public function cusNotificationOrder(){
        return view('customers.notifikasi-order');
    }


    public function showmitra(){
        return view('show_mitra');
    }



    public function send()
    {
            // message is being sent
            $message = new Message;
            $message->setAttribute('from', 1);
            $message->setAttribute('to', 15);
            $message->setAttribute('message', 'Demo message from user 1 to user 2');
            $message->save();
            
            event(new NewMessageNotification($message));
    }

    public function start()
    {
        return view('main-page');
    }
}
