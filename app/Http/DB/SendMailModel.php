<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;
use App\Http\DB\Setting;
use App\Http\DB\MailTemplates;
use Illuminate\Support\Facades\Session;
use Mail;

use App\Http\DB\ServiceRequest;
 
class SendMailModel extends Model
{

    public static function dispatchMail($type, $params, $clientMail)
    {
        try {

            $mail_template = MailTemplates::where('mail_type', '=', $type)->first();

            // dd($mail_template->mail_tags);
            $setting = Setting::first();

            if(count($mail_template) > 0 ) {

                $email_msg = $mail_template->description;

                if(count($params) > 0) {
                    foreach($params AS $key => $value) {
                        $email_msg = str_replace($key, $value, $email_msg);
                    }
                }

                $send_from = @$setting->admin_email;
                if($mail_template->admin_email!=NULL) {
                    $send_from_email = $mail_template->admin_email;
                }
                $subject = $mail_template->subject;

                Mail::send('email.index', [ 'email_msg' => $email_msg], function ($message) use($send_from, $clientMail, $subject) {

                    $message->subject($subject);
                    $message->from($send_from);//reciver
                    $message->to($clientMail);//sender

                });

            }

            return true;
        } catch (Exception $e) {
            return false;
        }
    }


    public static function dispatchMailClient($type, $params, $clientMail)
    {
        try {

            $mail_template = MailTemplates::where('mail_type', '=', $type)->first();
            $setting = Setting::first();

            if(count($mail_template) > 0 ) {

                $email_msg = $mail_template->description;

                if(count($params) > 0) {
                    foreach($params AS $key => $value) {
                        $email_msg = str_replace($key, $value, $email_msg);
                    }
                }

                $send_from = @$setting->admin_email;
                if($mail_template->admin_email!=NULL) {
                    $send_from_email = $mail_template->admin_email;
                }
                $subject = $mail_template->subject;

                Mail::send('email.client', [ 'email_msg' => $email_msg], function ($message) use($send_from, $clientMail, $subject) {

                    $message->subject($subject);
                    $message->to($send_from);//sender
                    $message->from($clientMail);//reciver

                });


            }

            return true;
        } catch (Exception $e) {
            return false;
        }
    }





}
