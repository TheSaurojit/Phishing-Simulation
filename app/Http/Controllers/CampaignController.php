<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CampaignController extends Controller
{
   

    public function insertCampaign(Request $request)
        {
            if($request->method()=="GET")
            {


                return view('add_staffs');

            }
            else

            {
         
                    $request->validate([
                        'csv'=>['required'],
                        'campaign_name'=>['required']
                    ]);

                    $file=$request->file('csv');
                    

                    if($file->getClientOriginalExtension()!="csv")

                        {

                            return redirect()->back()->withErrors('File must be of type csv');
                        }


                try {
                    
                        $fileName=$file->getClientOriginalName();

                        $path=public_path('files/');
                
                        $file->move($path,$fileName);

                        $fileContents = file($path.$fileName);

                        foreach ($fileContents as $line) 
                        {
                            

                            $data = str_getcsv($line);                       

                            if($data[0]==true)
                            {
                                $staff=new Campaign;
                                $staff->id=Str::uuid();
                                $staff->campaign_name=$request['campaign_name'];
                                $staff->name=$data[0];
                                $staff->email=$data[1];
                                if(isset($data[2]))
                                {
                                    $staff->phone=$data[2];
                                }
                                $staff->save();
                            }

                        
                        }

                        return redirect()->back()->with('success','Record inserted');

                    
                    }
                    catch (\Throwable $th)
                    {
                        return redirect()->back()->withErrors("Some Error Occured While Reading File");
                    }

                    
            
            }
        }


    public function getCampaign(Request $request)
        {
            

            $campaign = Campaign::distinct()->pluck('campaign_name');



            return view('all_staffs',compact('campaign'));
        }

        public function delete(Request $request)
        {
            $name=$request['name'];
          
               $true= Campaign::where('campaign_name',$name)->exists();

           
               if($true==true)
               {
                    Campaign::where('campaign_name',$name)->delete();

                    return redirect()->back()->with('success','Record deleted');

               }

               return redirect()->back()->withErrors("Some Error Occured While Deleting");

        }



}
