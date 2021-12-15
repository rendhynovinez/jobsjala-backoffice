<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Customer;
use App\User;

class GroupController extends Controller
{
    //

    public function index()
    {
        // customer is group if is_group = 1
        $groups = Customer::where('is_group', 1)->get();
        return view('admin.listgroup', ['groups' => $groups]);
    }


    public function edit(Request $request)
    {

        try {
            $group = Customer::find($request->id);
            $group->is_active = $request->is_active;
            $group->save();

            $notification = array(
                'message' => 'Group data has been updated successfully!                ',
                'alert-type' => 'success'
            );
            return Redirect::to('/group-list')->with($notification);

        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Group data failed to update!',
                'alert-type' => 'error'
            );
            return Redirect::to('/group-list')->with($notification);
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
                return Redirect::to('/group-list')->with($notification);
            }
            Customer::find($id)->delete();

            $notification = array(
                'message' => 'Group data has been deleted successfully!',
                'alert-type' => 'success'
            );
            return Redirect::to('/group-list')->with($notification);
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Group data has failed to be deleted!',
                'alert-type' => 'error'
            );
            return Redirect::to('/group-list')->with($notification);
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
                'message' => 'Group data reset password successfully!',
                'alert-type' => 'success'
            );
            return Redirect::to('/group-list')->with($notification);
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Group data failed to reset password!',
                'alert-type' => 'error'
            );
            return Redirect::to('/group-list')->with($notification);
        }
    }
}

