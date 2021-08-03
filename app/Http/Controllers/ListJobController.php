<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\listJob;

class ListJobController extends Controller
{
    //

    public function index()
    {
        $listJob = listJob::all();

        return view('admin.listjob', ['listJob' => $listJob]);
    }


    public function store(Request $request)
    {

        try {
            $notification = array(
                'message' => 'Jobs data has been saved successfully!                ',
                'alert-type' => 'success'
            );

     
            $request->validate([
                'itemCompany'  => 'required',
                'itemSalary' => 'required',
                'itemTitle' => 'required',
                'itemPostDescription' => 'required',
                'ItemDetailDescription' => 'required',
                'itemAdress' => 'required',
                'itemStatus' => 'required',
                'ItemCategory' => 'required',
                'ItemRequirements' => 'required'
            ]);

            listJob::create([
                'itemCompany'  => $request->itemCompany,
                'itemSalary' =>  $request->itemSalary,
                'itemTitle' =>  $request->itemTitle,
                'itemPostDescription' =>  $request->itemPostDescription,
                'ItemDetailDescription' =>  $request->ItemDetailDescription,
                'itemAdress' =>  $request->itemAdress,
                'itemStatus' =>  $request->itemStatus,
                'ItemCategory' =>  $request->ItemCategory,
                'ItemRequirements' =>  $request->ItemRequirements
            ]);

            return Redirect::to('/list-job')->with($notification);

        } catch (\Throwable $th) {
            
            $notification = array(
                'message' => 'Jobs data failed to save! ',
                'alert-type' => 'error'
            );
            return Redirect::to('/list-job')->with($notification);
        }
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
