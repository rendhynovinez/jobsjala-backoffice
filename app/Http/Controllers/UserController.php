<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\User;



class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::all();

        $privilege = [
            1 => 'Admin'
        ];

        return view('admin.listusers', ['users' => $users, 'privilege' => $privilege]);
    }

    public function store(Request $request)
    {
        try {
            $notification = array(
                'message' => 'User data has been saved successfully!                ',
                'alert-type' => 'success'
            );

            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users|email',
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make('opsokp2p123'),
                'permission' => 1
            ]);

            return Redirect::to('/users-list')->with($notification);
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'User data failed to save! ',
                'alert-type' => 'error'
            );
            return Redirect::to('/users-list')->with($notification);
        }
    }

    public function edit(Request $request)
    {

        try {
            $user = User::find($request->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->permission = $request->permission;
            $user->is_active = $request->is_active;
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
            
            $user->save();

            $notification = array(
                'message' => 'User data has been updated successfully!                ',
                'alert-type' => 'success'
            );
            return Redirect::to('/users-list')->with($notification);
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'User data failed to update!',
                'alert-type' => 'error'
            );
            return Redirect::to('/users-list')->with($notification);
        }
    }

    public function destroy($id)
    {
        try {
            if (Auth::user()->id == $id) {
                $notification = array(
                    'message' => 'Cant delete your own account!',
                    'alert-type' => 'error'
                );
                return Redirect::to('/users-list')->with($notification);
            }
            User::find($id)->delete();

            $notification = array(
                'message' => 'User data has been deleted successfully!',
                'alert-type' => 'success'
            );
            return Redirect::to('/users-list')->with($notification);
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'User data has failed to be deleted!',
                'alert-type' => 'error'
            );
            return Redirect::to('/users-list')->with($notification);
        }
    }

    public function resetpassword($id)
    {
        try {
            $reset = User::find($id);
            $reset->password = Hash::make('admin123');
            $reset->is_re_password = 0;
            $reset->save();

            $notification = array(
                'message' => 'User data reset password successfully!',
                'alert-type' => 'success'
            );
            return Redirect::to('/users-list')->with($notification);
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'User data failed to reset password!',
                'alert-type' => 'error'
            );
            return Redirect::to('/users-list')->with($notification);
        }
    }
}
