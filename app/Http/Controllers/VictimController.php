<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Staff;
use App\Models\Victim;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class VictimController extends Controller
{

    public function showData(Request $request)
    {

    

        $victim=DB::table('victims')
        ->join('campaigns','victims.staff_id','=','campaigns.id')
                        ->select('victims.*','campaigns.*')->get();

                        

        return view('victims',compact('victim'));

        
    }
    
    public function json(Request $request)
    {
  
        try {

              Victim::where('staff_id', $request['id'])->orderBy('id', 'desc') ->first()->
              update([
                        'data'=>json_encode($request->all())
              ]);    
            
              return  response(["data"=>"Trapped"]);    


        } catch (\Throwable $th) {

            return  response(["data"=>"Trapped"]);    
        }


    }



    public function downloadCsv(Request $request)
    {
    
       try{ 
                    $data = DB::table('victims')
                    ->join('campaigns', 'victims.staff_id', '=', 'campaigns.id')
                    ->select('victims.*', 'campaigns.*')
                    ->get();


                // Define CSV file path within the storage directory
                $filePath = 'csv/'.time().'victims.csv';

             
                $handle = fopen(storage_path('app/' . $filePath), 'w');

                // Write CSV headers
                fputcsv($handle, [
                    'Victim ID',
                    'Name',
                    'Email',
                    'Campaign Name',
                    'Phishing Template',
                    'Email Template',
                    'Status'
                    // Add more headers as needed
                ]);

                // Write data rows to the CSV file
                foreach ($data as $row) {
                    fputcsv($handle, [
                        $row->staff_id,
                        $row->name,
                        $row->email,
                        $row->campaign_name,
                        $row->template,
                        $row->email_temp,
                        $row->data?"Triggered":"Trapped"
                    ]);
                }


                // Close the file handle
                fclose($handle);
                return response()->download(storage_path('app/' . $filePath),"victims.csv")->deleteFileAfterSend(true);
    
        }
        catch(Throwable $th)
        {
            unlink(storage_path('app/' . $filePath));
            return redirect()->back()->withErrors("Some Error Occured While Creating File");


        }


    }
}
