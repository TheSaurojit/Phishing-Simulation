<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if($request->user()!=NULL)
        {
            return redirect('/');
        }

        if($request->method()=="GET")
        {
            return view('login');
        }

        else
        {
            $request->validate([
                'email'=>'required|email',
                'password'=>'required'

            ]);
            
                if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']], true)) 

                {
                    $request->session()->regenerate();

                    
                    return redirect('/');
                   
                }
               
                else{

                    return redirect()->back()->withErrors("Password didn't match or User doesnot exist");

                }

        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

    }


    public function email_config(Request $request)
    {
        if($request->method()=="GET")
        {
            $config=DB::table('users')->where('id',$request->user()->id)->get('config')->first();

            $config=json_decode($config->config);
                      

            return view('config',compact('config'));
        }
        else
        {
          
            $mailData = $request->only([
                'mailer', 'host', 'port', 'username', 'password', 'encryption', 'address', 'name'
            ]);

          
           foreach($mailData as $key => $val)
           {
              if($val==null)
              {
                return redirect()->back()->withErrors("{$key} field is required");
              }
           }
        
           $mailData=json_encode($mailData);
        
        User::where('id',$request->user()->id)->update([
            'config'=>$mailData
        ]);

        return redirect('/')->with('success','Email Configured');
        }
    }

}
