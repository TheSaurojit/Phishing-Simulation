<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Mail\SendEmail;
use App\Models\Campaign;
use App\Models\TotalMail;

use App\Models\Victim;


use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
 
    public function  dash(Request $request) { 
       
        $submit = Victim::whereNotNull('data')->count();  
    
        $total_mail=TotalMail::count();
    
        $victim=Victim::count();
    
        $clicked=['val'=>$victim,'label'=>"Link Clicked"];
    
        $submited=['val'=>$submit,'label'=>"Data Submitted"];

        $email_sent=['val'=>$total_mail,'label'=>" Email Sent"];
        
        $arr=[$clicked,$submited,$email_sent];
    
        $arr=json_encode($arr);
       
      
         return view('index',compact('submit','total_mail','victim','arr'));
    
    
    }

}






