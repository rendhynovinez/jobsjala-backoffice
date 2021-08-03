<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\UsersHistoryJob;

class IncomingJobController extends Controller
{
    //

    public function index($job_id)
    {
        $UsersHistoryJob = UsersHistoryJob::with('Customer')->where('jobs_id', $job_id)->get();

        return view('admin.incoming-job', ['UsersHistoryJob' => $UsersHistoryJob, 'job_id' => $job_id]);
    }



    public function edit(Request $request)
    {

        try {

            $UsersHistoryJob = UsersHistoryJob::find($request->id);
            $UsersHistoryJob->status = $request->itemStatus;
            $UsersHistoryJob->save();

            $notification = array(
                'message' => 'Status has been updated successfully!                ',
                'alert-type' => 'success'
            );
            return Redirect::to('/job-list/incoming-job/'.$request->job_id)->with($notification);
        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Jobs data failed to update!',
                'alert-type' => 'error'
            );
            return Redirect::to('/job-list/incoming-job/'.$request->job_id)->with($notification);
        }
    }

}
