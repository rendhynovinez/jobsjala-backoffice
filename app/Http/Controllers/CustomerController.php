<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Customer;
use App\DetailUsers;
use App\User;

class CustomerController extends Controller
{

    public function index()
    {
        $Customer = Customer::whereNull('is_group')->get();

        return view('admin.listcustomers', ['customers' => $Customer]);
    }

    // Index if grouping

    public function indexByGroup($group_id)
    {
        $Customer = DetailUsers::where('Group',$group_id)->get();

        return view('admin.listcustomersbygroup', ['customers' => $Customer]);
    }



    public function edit(Request $request)
    {

        try {
            $Customer = Customer::find($request->id);
            $Customer->is_active = $request->is_active;
            $Customer->save();

            $notification = array(
                'message' => 'Customer data has been updated successfully!                ',
                'alert-type' => 'success'
            );
            return Redirect::to('/customers-list')->with($notification);

        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Customer data failed to update!',
                'alert-type' => 'error'
            );
            return Redirect::to('/customers-list')->with($notification);
        }
    }

    public function destroy($id)
    {
        try {
            if (Auth::Customer()->id == $id) {
                $notification = array(
                    'message' => 'Cant delete your own account!',
                    'alert-type' => 'error'
                );
                return Redirect::to('/customers-list')->with($notification);
            }
            Customer::find($id)->delete();

            $notification = array(
                'message' => 'Customer data has been deleted successfully!',
                'alert-type' => 'success'
            );
            return Redirect::to('/customers-list')->with($notification);
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Customer data has failed to be deleted!',
                'alert-type' => 'error'
            );
            return Redirect::to('/customers-list')->with($notification);
        }
    }

    public function resetpassword($id)
    {
        try {
            $reset = Customer::find($id);
            $reset->password = Hash::make('admin123');
            $reset->is_re_password = 0;
            $reset->save();

            $notification = array(
                'message' => 'Customer data reset password successfully!',
                'alert-type' => 'success'
            );
            return Redirect::to('/customers-list')->with($notification);
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Customer data failed to reset password!',
                'alert-type' => 'error'
            );
            return Redirect::to('/customers-list')->with($notification);
        }
    }
}
