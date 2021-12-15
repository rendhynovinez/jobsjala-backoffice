<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\listJob;
use App\Customer;
use App\Listjobgroup;

class ListJobController extends Controller
{
    public function index()
    {
        $listJob = listJob::all();

        $ListGroup = Customer::where('is_active', 1)->where('is_group', 1)->get();

        return view('admin.listjob', ['listJob' => $listJob, 'ListGroup' => $ListGroup]);
    }


    public function store(Request $request)
    {
        // try {
        //     $notification = array(
        //         'message' => 'Jobs data has been saved successfully!                ',
        //         'alert-type' => 'success'
        //     );

            // $request->validate([
            //     'itemCompany'  => 'required',
            //     'itemSalary' => 'required',
            //     'itemTitle' => 'required',
            //     'itemPostDescription' => 'required',
            //     'ItemDetailDescription' => 'required',
            //     'itemAdress' => 'required',
            //     'itemStatus' => 'required',
            //     'ItemRequirements' => 'required'
            // ]);
            
            $listJob = listJob::create([
                'itemCompany'  => $request->itemCompany,
                'itemSalary' =>  $request->itemSalary,
                'itemTitle' =>  $request->itemTitle,
                'itemPostDescription' =>  $request->itemPostDescription,
                'ItemDetailDescription' =>  $request->ItemDetailDescription,
                'itemAdress' =>  $request->itemAdress,
                'itemStatus' =>  $request->itemStatus,
                'ItemRequirements' =>  $request->ItemRequirements,
                'female_cnt' =>  $request->female_cnt,
                'male_cnt' =>  $request->male_cnt,
                'standard_cnt' =>  $request->standard_cnt,
                'apply_female' =>  $request->apply_female,
                'apply_male' =>  $request->apply_male,
                'apply_standard' =>  $request->apply_standard,
                'gender_status' => $request->gender_status
            ]);
            

            $groups = $request->idgroup;
            foreach( $groups as $key => $item ) {
                $listJobGroup = Listjobgroup::create([
                    "lisjob_id" => $listJob->id,
                    "group_id" => $item
                ]);
            }

        //     return Redirect::to('/list-job')->with($notification);

        // } catch (\Throwable $th) {
            
        //     $notification = array(
        //         'message' => 'Jobs data failed to save! ',
        //         'alert-type' => 'error'
        //     );
        //     return Redirect::to('/list-job')->with($notification);
        // }
    }

    public function edit(Request $request)
    {

        try {

            $ListJob = ListJob::find($request->id);
            $ListJob->itemCompany = $request->itemCompany;
            $ListJob->itemSalary  =  $request->itemSalary;
            $ListJob->itemTitle  =  $request->itemTitle;
            $ListJob->itemPostDescription  =  $request->itemPostDescription;
            $ListJob->ItemDetailDescription =  $request->ItemDetailDescription;
            $ListJob->itemAdress =  $request->itemAdress;
            $ListJob->itemStatus =  $request->itemStatus;
            $ListJob->ItemCategory =  $request->ItemCategory;
            $ListJob->ItemRequirements =  $request->ItemRequirements;
            $ListJob->save();

            $notification = array(
                'message' => 'Jobs data has been updated successfully!                ',
                'alert-type' => 'success'
            );
            return Redirect::to('/list-job')->with($notification);
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Jobs data failed to update!',
                'alert-type' => 'error'
            );
            return Redirect::to('/list-job')->with($notification);
        }
    }

}
