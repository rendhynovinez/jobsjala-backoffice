<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\listJob;
use App\Education;
use App\LiveInArea;
use App\JobSpecialist;
use App\Etnics;
use App\UsersHistoryJob;
use App\DetailUsers;
use DB;
use Auth;


class ApiController extends Controller
{
     
    public $successStatus = 200;
    
    //Function Job
    public function listjob(){
    $listJob = DB::table('list-job')
    ->select('list-job.id as job_id',
    'list-job.itemCompany as itemCompany',
    'list-job.itemTitle','list-job.itemPostDescription',
    'list-job.itemDetailDescription as details',
    'list-job.itemAdress',
    'list-job.itemSalary',
    'list-job.itemStatus','list-job.itemImg',
    'job_specialist.name as ItemCategory',
    'list-job.ItemRequirements'
    )
    ->leftJoin('job_specialist','list-job.ItemCategory','=','job_specialist.id')
    ->get();
    return response()->json(['data' => $listJob], $this->successStatus);
    }


    //Detail List Job
     public function DetailListJob($jobs_id){
        $detailJob = listJob::where('id',$jobs_id)->get();

        // Check Existing Data for button disable
        $cekHistory = UsersHistoryJob::where('jobs_id',$jobs_id)
        ->where('user_id',auth('api')->user()->id)->first();

        if($cekHistory == null){
          $status = 0;
        }else{
          $status = 1;
        }
        return response()->json(['data' => $detailJob, 'history_status' => $status], $this->successStatus);
            
    }

    // List Education
    public function listeducation(){
       $listEducation = Education::all();
        return response()->json(['data' => $listEducation], $this->successStatus);
    }

    
    // List Live In Area
    public function listLiveInArea(){
        $listArea = LiveInArea::all();
         return response()->json(['data' => $listArea], $this->successStatus);
     }


    // List Job Specialist
    public function JobSpecialist(){
       $listJobSpecialist = JobSpecialist::all();
       return response()->json(['data' => $listJobSpecialist], $this->successStatus);
   }

    // List Job Etniclist
     public function Etniclist(){
      $Etnic = Etnics::all();
      return response()->json(['data' => $Etnic], $this->successStatus);
     }


     
    // User Job History
    public function UsersHistoryJob(){

      $customers_id = auth('api')->user()->id;
      $UsersHistoryJob = DB::table('users-history-job')
      ->select('users-history-job.id',
      'users-history-job.jobs_id as job_id',
      'users-history-job.status as job_status',
      'users-history-job.user_id',
      'customers.username',
      'list-job.itemCompany',
      'list-job.itemTitle',
      'list-job.itemPostDescription',
      'list-job.itemDetailDescription as details',
      'status-job.name as itemStatusApply',
      'list-job.itemAdress',
      'list-job.itemSalary',
      'list-job.itemStatus',
      'job_specialist.name as ItemCategory',
      'list-job.ItemRequirements'
      )
      ->leftJoin('list-job','list-job.id','=','users-history-job.jobs_id')
      ->leftJoin('customers','customers.id','=','users-history-job.user_id')
      ->leftJoin('status-job','status-job.id','=','users-history-job.status')
      ->leftJoin('job_specialist','list-job.ItemCategory','=','job_specialist.id')
      ->where('customers.id', $customers_id)
      ->get();

      return response()->json(['data' => $UsersHistoryJob], $this->successStatus);
    }


    // Create Profile
    public function profilecreate(Request $request)
    {

        try {
            $notification = array(
                'message' => 'Profile data has been saved successfully!',
                'alert-type' => 'success'
            );
   
            $request->validate([
                'fullname' => 'required',
                'dateofbirth'=> 'required',
                'gender' => 'required',
                'phonenumber' => 'required',
                'etnics'=> 'required',
                'address' => 'required',
                'LiveInArea' => 'required',
                'Education' => 'required',
                'Organization'=> 'required',
                'JobSpecialist'=> 'required',
                'Skills'=> 'required'
            ]);

            $DetailUsers = DetailUsers::create([
              'fullname' =>  $request->fullname,
              'dateofbirth' =>  $request->dateofbirth,
              'gender' =>  $request->gender,
              'phonenumber' => $request->phonenumber,
              'etnics' =>  $request->etnics,
              'address' =>  $request->address,
              'LiveInArea' =>  $request->LiveInArea,
              'Education' =>  $request->Education,
              'Organization' =>  $request->Organization,
              'JobSpecialist' =>  $request->JobSpecialist,
              'Skills' =>  $request->Skills,
            'customer_id' =>   auth('api')->user()->id,


          ]);
      

            return response()->json(['data' => $notification], $this->successStatus);

        } catch (\Throwable $th) {
            
            $notification = array(
                'message' => 'Profile data failed to save! ',
                'alert-type' => 'error'
            );
            return response()->json(['data' => $notification], 500);
        }
    }


       // List Education
    public function detailprofile(){
        // $detailprofile = DetailUsers::where('customer_id',  auth('api')->user()->id)->get();
        $detailprofile = DetailUsers::where('customer_id',  auth('api')->user()->id)->get();
         return response()->json(['data' => $detailprofile], $this->successStatus);
     }


    public function profileedit(Request $request)
    {

        try {

            $DetailUsers = DetailUsers::find($request->id);
            $DetailUsers->fullname =  $request->fullname;
            $DetailUsers->dateofbirth =$request->dateofbirth;
            $DetailUsers->gender = $request->gender;
            $DetailUsers->phonenumber = $request->phonenumber;
            $DetailUsers->etnics =$request->etnics;
            $DetailUsers->address =  $request->address;
            $DetailUsers->LiveInArea = $request->LiveInArea;
            $DetailUsers->Education =  $request->Education;
            $DetailUsers->Organization = $request->Organization;
            $DetailUsers->JobSpecialist = $request->JobSpecialist;
            $DetailUsers->Skills = $request->Skills;
            // $DetailUsers->customer_id = Auth::user()->id;
            $DetailUsers->customer_id =  auth('api')->user()->id;
            
     
            $DetailUsers->save();


            $notification = array(
                'message' => 'Profile data has been updated successfully!                ',
                'alert-type' => 'success'
            );
            return response()->json(['data' => $notification], $this->successStatus);

        } catch (\Throwable $th) {
            $notification = array(
                'message' => 'Profile data failed to update!',
                'alert-type' => 'error'
            );
            return response()->json(['data' => $notification], $this->successStatus);
        }
    }


    public function applyjob(Request $request)
    {

        try {
            $notification = array(
                'message' => 'Apply data has been successfully!',
                'alert-type' => 'success'
            );
  
            $request->validate([
                'jobs_id' => 'required',
            ]);

            $DetailUsers = UsersHistoryJob::create([
              'jobs_id' =>  $request->jobs_id,
              'status' =>  1,  // On Review
            // 'user_id' => Auth::user()->id,
               'user_id' => auth('api')->user()->id,
          ]);
      
            return response()->json(['data' => $notification], $this->successStatus);

        } catch (\Throwable $th) {


            $notification = array(
                'message' => 'Apply data failed to save! ',
                'alert-type' => 'error'
            );
            return response()->json(['data' => $notification], 500);
        }
    }


    

}
