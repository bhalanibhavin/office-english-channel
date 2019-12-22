 <?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Sentinel;
use App\Http\DB\Setting;

class SettingDataComposer
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
        $contact_details = [ 'facebook_url' => '', 'twitter_url' => '', 'linkedin_url' => '', 'google_plus_url' => '', 'admin_email' => '' ];
        
        try {
            $settings_date = Setting::first();

            if(count($settings_date) > 0) {
                $contact_details['facebook_url']      = $settings_date->facebook_url;
                $contact_details['twitter_url']       = $settings_date->twitter_url;
                $contact_details['linkedin_url']      = $settings_date->linkedin_url;
                $contact_details['google_plus_url']   = $settings_date->google_plus_url;
                $contact_details['admin_email']       = $settings_date->admin_email;
            }
            
        } catch (Exception $e) {
            
        }

        $view->with('settings_date', $settings_date);
    }
}