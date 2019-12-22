<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Sentinel;
use App\Http\DB\Setting;

class FooterContactUsComposer
{
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $contact_details = [ 'facebook_url' => '', 'twitter_url' => '', 'linkedin_url' => '', 'youtube_url' => '', 'google_plus_url' => '', 'pinterest_url' => '', 'instagram_url' => '', 'admin_email' => '', 'contact_address' => '', 'contact_phone' => '', 'contact_text' => '' ];

        try {
            $settings = Setting::first();

            if(count($settings) > 0) {
                $contact_details['facebook_url']      = $settings->facebook_url;
                $contact_details['twitter_url']       = $settings->twitter_url;
                $contact_details['linkedin_url']      = $settings->linkedin_url;
                $contact_details['youtube_url']       = $settings->youtube_url;
                $contact_details['google_plus_url']   = $settings->google_plus_url;
                $contact_details['pinterest_url']     = $settings->pinterest_url;
                $contact_details['instagram_url']     = $settings->instagram_url;
                $contact_details['admin_email']       = $settings->admin_email;
                $contact_details['contact_address']   = $settings->contact_address;
                $contact_details['contact_phone']     = $settings->contact_phone;
                $contact_details['contact_text']      = $settings->contact_text;
            }
        } catch (Exception $e) {
            
        }

        $view->with('contact_details', $contact_details);
    }
}