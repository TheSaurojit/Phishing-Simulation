<?php

namespace App\Jobs;

use App\Mail\SendEmail;
use App\Models\TotalMail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class SendMailJob 
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

     public $id;
     public $email;
     public $email_temp;
     public $phish_temp;
     public $admin_id;
    public function __construct($admin_id,$id,$email,$phish_temp,$email_temp)
    {
      $this->id=$id;
      $this->email=$email;
      $this->email_temp=$email_temp;
      $this->phish_temp=$phish_temp;
      $this->admin_id=$admin_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
      $this->email();
      
        Mail::to($this->email)->send(new SendEmail($this->id,$this->phish_temp,$this->email_temp));
         
        $mail=new TotalMail;
        $mail->staff=$this->email;
        $mail->save();

    }

    public function email()
    {
          $config=DB::table('users')->where('id',$this->admin_id)->get('config')->first();

          $config=json_decode($config->config,true);
      
      
      
          $val=array(
              'transport'=>$config['mailer'],
              'host'=>$config['host'],
              'port'=>$config['port'],
              'encryption'=>$config['encryption'],
              'username'=>$config['username'],
              'password'=>$config['password'],
              'timeout'=>null,
              'local_domain'=>null
          );
      
          $from=array(
              'address'=>$config['address'],
              'name'=>$config['name']
          );
      
          Config::set('mail.mailers.smtp', $val);
      
          Config::set('mail.from',$from);
    }
}
