<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Notifications\SetPassword;
use Illuminate\Auth\Passwords\TokenRepositoryInterface;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Http;
use Mail;
use App\User;
use App\Client;
use App\UserTalent;

class SignupController extends Controller
{   
    use Notifiable;
    public $email="";

    protected $rulesArr = [
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        //  'resume' => ['mimes:pdf,doc,docx','max:2048'],
         'agreement' => ['required'],
         'fee-agreement' => ['required'],
    ];
    protected $message=[
        'first_name.required'=>'The First Name is required.',
        'last_name.required'=>'The Last Name is required.',
        'mobile_no.numeric'=> 'The Mobile No should be number.',
        'mobile_no.min'=> 'The length Mobile No should be 9.',
        'mobile_no.max'=> 'The length Mobile No should be 11.',
        // 'resume.max'=>'The Resume Size Should be less than 2048.',
        // 'resume.mimes'=>'The resume of type pdf, doc, docx.',
        'agreement.required'=>'Please accept the T&C.',
        'fee-agreement.required'=>'Please accept the fee agreement.',
    ];


    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {   $nofooter = 1;
        return view('auth.register',compact('nofooter'));
    }
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {   
       

        if($request['service'] == 'Contingency + Retained'){

            try{
                $data = [];
                $request->validate($this->rulesArr,$this->message);
              
                // if (request()->has('resume')) {
                //     $avataruloaded=request()->file('resume');
                //     $avatarname = $this->convertLabelSpace(pathinfo($avataruloaded->getClientOriginalName(), PATHINFO_FILENAME)).'_'.time().'.'.$avataruloaded->getClientOriginalExtension();
                //     $avatarpath= public_path('/resume_pingpronto/');
                //     $fileName = request()->file('resume')->getClientOriginalName();
                //     $filePath = env("AWS_BUCKET_FOLDER", "production/").Carbon::now().'/'. $fileName;
                //     $path = Storage::disk('s3')->put($filePath, file_get_contents(request()->file('resume')));
                //     $path = Storage::disk('s3')->url($filePath);
                //     $data['resume'] = $path;
                // }else{
                //     $data['resume'] = '';
                // }
               
                  
                $existCount = User::where('email', $request['email'])->whereNull('deleted_at')->count();
                
                if($existCount > 0){
                    return redirect()->back()->withInput()->withErrors(['email', 'Email id already exists!']);
                }
                
                $data['name'] = $request['first_name']." ".$request['last_name'];
                $data['first_name'] = $request['first_name'];
                $data['last_name'] = $request['last_name'];
                $data['email'] = $request['email'];
                $data['created_by'] =  0;
                $data['updated_by'] =  0;
                $data['password'] = Hash::make($request['password']);
                $data['status'] = 1;
                $data['country_code'] = "00971";
                $data['mobile_number'] =  $request['mobile_number'];

                DB::beginTransaction();

                $user = User::create($data);
                $user->assignRole('Client');
                $create_token=Str::random(60);

                //password_resets
                $row= DB::table('password_resets')->where('email', $request['email'])->first();
                if($row){
                    DB::table('password_resets')
                        ->where('email', $request['email'])
                        ->update(['token' =>  Hash::make($create_token),'created_at' => Carbon::now()]);
                }else{
                    //Create Password Reset Token
                    DB::table('password_resets')->insert([
                        'email' => $request['email'],
                        'token' => Hash::make($create_token),
                        'created_at' => Carbon::now()
                    ]);
                }
                $this->email = $request['email'];
                $tokenData['token'] = $create_token;
                $tokenData['email'] = base64_encode($request['email']);
                $tokenData['first_name'] = $request['first_name'].' '.$request['last_name'];
                $tokenData['user_name'] = $request['email'];
               
                
                $request['user_id'] = 0;
                $request['first_name'] = $request['first_name'];
                $request['last_name'] = $request['last_name'];
                $request['name'] =  $request['first_name']." ".$request['last_name'];
                $request['referral_id'] = !empty($user) ? $user->id : 0;
                $request['success_fee'] = ($request['success_fee']!=''?$request['success_fee']:0);
                $request['created_by'] =  !empty($user) ? $user->id : 0;
                $request['services'] =  '';
                $client = Client::create($request->all());
                DB::commit(); 

                $email =$request['email'];
                Mail::send('client_email_notification',$tokenData, function($message) use($email){
                    $message->to($email)->subject('Signup PingPronto');             
                });

                return redirect()->route('home')->with('success','New User created successfully.');
            } catch(Exception $e){
                DB::rollback();
                return redirect()->back()->with('error', "Oops! Something went wrong.");
            }

        }else{
            $apiURL =  env('APP_API_URL', 'http://127.0.0.1:3000');
            $responseExistCheck = Http::get($apiURL.'/users/exists?email='.$request['email'], []);
            $jsonData = $responseExistCheck->json();
           
            if(isset($jsonData['user_exists']) && $jsonData['user_exists'] == false){
                // $responseDomaiCheck = Http::get('http://127.0.0.1:3000/users/blocked_email_domain.json?email='.$request['email'], []);
                // dd($responseDomaiCheck);
                // $jsonData = $responseDomaiCheck->json();
                // dd('Yes',$jsonData);
                $requestObj = ["user" => 
                                ["role" => "talent",
                                 "email" => $request['email'],
                                 "password" => $request['password'],
                                 "password_confirmation" => $request['password'],
                                 "first_name" => $request['first_name'],
                                 "last_name" => $request['last_name'],
                                 "phone_number" => $request['mobile_number']
                                ],
                                "role"=>"talent"];
                
                $responseExistCheck = Http::post($apiURL.'/signup/talent', $requestObj);
                $jsonData = $responseExistCheck->json();
                    
                if(isset($jsonData['success']) && $jsonData['success'] == true){
                    return redirect()->route('home')->with('success','New User created successfully.');
                }else{
                    return redirect()->back()->with('error', "Oops! Something went wrong.");
                }
               
            }else{
                return redirect()->back()->with('error', "Email id already exists!");
            }

        }

        
    } 

    public function convertLabelSpace($label)
    {
        $label = str_replace(" ","_",$label);
        return $label;
    }

     /**
     * Send the password set notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        if(config('mail.username') != '' && config('mail.password') != ''){
            $this->notify(new SetPassword($token));
        }
    }

}
