<?php

namespace App\Http\Controllers;

use App\Models\EmailTemplate;
use Illuminate\Http\Request;

class EmailTemplateController extends Controller
{
    public function getEmail(Request $request)
    {
        if($request->method()=="GET")
        {
            $temp=EmailTemplate::get();
            return view('add_email_templates',compact('temp'));

        }
        else
        {
            $request->validate([
                'email-body'=>'required',
                'email-name'=>'required|unique:email_templates,name'
            ]);

            $name=$request['email-name'];
            $body=$request['email-body'];
            
            try {
                
                EmailTemplate::create([

                    'name'=>$name
                ]);

                file_put_contents(resource_path("views/email_template/{$name}.blade.php"),$body);

                return redirect()->back()->with('success','Mail Template Created');

            } catch (\Throwable $th) {
                return redirect()->back()->withErrors("Some Error Occured While Creating  Mail Template");

            }
        }
    }

 
}


