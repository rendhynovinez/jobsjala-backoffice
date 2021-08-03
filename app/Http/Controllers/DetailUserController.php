<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\DetailUsers;
use App\JobSpecialist;
use App\Etnics;
use App\LiveInArea;
use App\Education;



class DetailUserController extends Controller
{
    //
    public function index($customer_id)
    {

        $seg = Request::segment(2);

        try {

            $data = DetailUsers::where('customer_id', $customer_id)->first();        
           
            $JobSpecialist  = JobSpecialist::where('id', $data->JobSpecialist)->pluck('name');
           
            $Etnics  = Etnics::where('id', $data->etnics)->pluck('name');
           
            $LiveInArea  = LiveInArea::where('id', $data->LiveInArea)->pluck('name');
           
            $Education  = Education::where('id', $data->Education)->pluck('name');
    
    
            $gender = [
                1 => 'Male',
                2 => 'Female'
            ];
            
            return view('admin.detail-users', ['data' => $data,
            'gender' => $gender,
            'JobSpecialist' => $JobSpecialist[0],
            'Etnics' => $Etnics[0],
            'LiveInArea' => $LiveInArea[0],
            'Education'  => $Education[0],
            'seg'=> $seg]);

   
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Candidate data not found',
                'alert-type' => 'error'
            );
            return Redirect::to('/customers-list')->with($notification);
        }
    }


       

}
