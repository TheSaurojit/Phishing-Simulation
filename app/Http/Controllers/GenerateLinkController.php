<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Models\Department;
use App\Models\EmailTemplate;
use App\Models\Campaign;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GenerateLinkController extends Controller
{   
    public function async_jobs($campaign,$phish_temp,$email_temp)
    {
        $admin_id=Auth::user()->id;
        
        foreach($campaign as $val)
        {
            SendMailJob::dispatch($admin_id,$val->id,$val->email,$phish_temp,$email_temp);
          
        }
    }

 
    public function getForm(Request $request)
    {
        if($request->method()=="GET")
        {
            $campaign = Campaign::distinct()->pluck('campaign_name');

            $temp=Template::get();

            $email_temp=EmailTemplate::get();
    
            return view('generate_links',compact('campaign','temp','email_temp'));
        }
        else
        {
        
            $request->validate([
                'campaign_name'=>'required',
                'template'=>'required',
                'email_template'=>'required'
            ]);

            $email_temp=$request['email_template'];
            $phish_temp=$request['template'];
            $campaign=$request['campaign_name'];
        // try {
               
        
            
               
                $campaign=Campaign::where('campaign_name',$campaign)->get();

               
                $this->async_jobs($campaign,$phish_temp,$email_temp);


                return redirect()->back()->with('success','Mail Sent');


            // } catch (\Throwable $th) {

            //     return redirect()->back()->withErrors("Some Error Occured While Sending  Mail");


            // }
        
        }
     
    }


}
