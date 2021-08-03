<?php

use Illuminate\Foundation\Auth\AuthenticatesUsers;


namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;




class CustomerLoginController extends Controller
{
    //
    use AuthenticatesUsers;

    public $successStatus = 200;

    public function login(Request $request){
        
        $credentials = $request->only('email', 'password');

        if(Auth::guard('customers')->attempt($credentials)){
            $user = Auth::guard('customers')->user();
            $success['token'] =  $user->createToken('nApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Email or password incorrect / wrong:'.$request], 401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = Customer::create($input);
        $success['token'] =  $user->createToken('nApp')->accessToken;
        $success['username'] =  $user->username;

        return response()->json(['success'=>$success], $this->successStatus);
    }

    public function logout(Request $request)
    {
        $logout = $request->user()->token()->revoke();
        if($logout){
            return response()->json([
                'message' => 'Successfully logged out'
            ]);
        }
    }

    public function checkusers()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }
  
    
}



    // protected $redirectTo = '/customer/home';

    // public function __construct()
    // {
    //     $this->middleware('guest:customer')->except('logout')->except('index');

    // }
    
    // public function index(Request $request){
    //     $Product = Product::when($request->keyword, function ($query) use ($request) {
    //         $query->where('title', 'like', "%{$request->keyword}%")
    //             ->orWhere('subtitle', 'like', "%{$request->keyword}%");
    //     })->paginate($request->limit ?? 50);
          
    //     $user = Auth::user();

    //       return view('front.welcome', compact('Product', 'user'));
    // }


    
    // public function showLoginForm()
    // {
    //     return view('auth.login-front');
    // }
    
    // public function showRegisterForm()
    // {
    //     return view('auth.register-front');
    // }
    
    // public function username()
    // {
    //         return 'username';
    // }
    
    // protected function guard()
    // {
    //       return Auth::guard('customer');
    // }
    
    // public function register(Request $request)
    // {

    //     // try {
    //     //     $notification = array(
    //     //         'message' => 'Successfully register!                ',
    //     //         'alert-type' => 'success'
    //     //     );

    //     //     $request->validate([
    //     //         'username'      => 'required',
    //     //         'email'         => 'required',
    //     //         'password'      => 'required'
    //     //     ]);

    //         $user = User::where('name',$request->refferal_code)->first();

    //         if(empty($user)){
    //             $notification = array(
    //                 'message' => 'Referral code does not exist',
    //                 'alert-type' => 'error'
    //             );
    //             return redirect()->route('customer.register')->with($notification);
    //         }

    //         $request->merge([
    //             'sales_id' => $user->id,
    //             'store_name' => 'No Name',
    //             'permission' => 1,
    //             'percent' => 5
    //         ]);

    //         \App\Customer::create($request->all());
    //         return redirect()->route('customer.login')->with('success', 'Successfully register!');

    //     // } catch (\Throwable $th) {
    //     //     $notification = array(
    //     //         'message' => 'Register failed ! ',
    //     //         'alert-type' => 'error'
    //     //     );
    //     //     return redirect()->route('customer.login')->with($notification);
    //     // }
       
    // }

    // public function logout()
    // {
    //     $this->auth->logout();
    //     Session::flush();
    //     return redirect('customer/login');
    // }

    // public function login(Request $request)
    // {
    //     Config::set('jwt.user', 'App\Customer'); 
    //     Config::set('auth.providers.customer.model', \App\Customer::class);

    //     $credentials = $request->only('email', 'password');

    //     try {
    //         if (! $token = JWTAuth::attempt($credentials)) {
    //             return response()->json(['error' => 'invalid_credentials'], 400);
    //         }
    //     } catch (JWTException $e) {
    //         return response()->json(['error' => 'could_not_create_token'], 500);
    //     }

    //     return response()->json(compact('token'));
    // }


    // public function register(Request $request)
    // {
    //     Config::set('jwt.user', 'App\Customer'); 
    //     Config::set('auth.providers.customer.model', \App\Customer::class);


    //     $validator = Validator::make($request->all(), [
    //         'username' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:customers',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);

    //     if($validator->fails()){
    //         return response()->json($validator->errors()->toJson(), 400);
    //     }

    //     $user = Customer::create([
    //         'username' => $request->get('username'),
    //         'email' => $request->get('email'),
    //         'password' => Hash::make($request->get('password')),
    //     ]);

    //     $token = JWTAuth::fromUser($user);

    //     return response()->json(compact('user','token'),201);
    // }

    // public function getAuthenticatedUser()
    // {

    //     Config::set('jwt.user', 'App\Customer'); 
    //     Config::set('auth.providers.customer.model', \App\Customer::class);


    //     try {

    //         if (! $user = JWTAuth::parseToken()->authenticate()) {
    //             return response()->json(['user_not_found'], 404);
    //         }

    //     } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

    //         return response()->json(['token_expired'], $e->getStatusCode());

    //     } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

    //         return response()->json(['token_invalid'], $e->getStatusCode());

    //     } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

    //         return response()->json(['token_absent'], $e->getStatusCode());

    //     }

    //     return response()->json(compact('user'));
    // }
