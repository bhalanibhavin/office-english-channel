<?php

namespace App\Commands\Admin;

use Illuminate\Console\Command;
use App\Http\DB\Setting;

class SettingStoreCommand extends Command
{
    public $data;
    public $request;
    public $operation = 'new';

    /**
     * @param $data
     * @param string $operation
     */

    public function __construct($data, $request, $operation = 'new') {
        $this->data = $data;
        $this->request = $request;
        $this->operation = $operation;
    }

    public function handle() {

        //Create new entry in database if operation = 'new'
        if($this->operation == 'edit') {
            
            $record                         = Setting::find($this->data['id']);

            $record->admin_email            = $this->data['admin_email'];
            $record->contact_address        = $this->data['contact_address'];
            $record->contact_phone          = $this->data['contact_phone'];
            $record->facebook_url           = $this->data['facebook_url'];
            $record->twitter_url            = $this->data['twitter_url'];
            $record->linkedin_url           = $this->data['linkedin_url'];
            $record->google_plus_url        = $this->data['google_plus_url'];
            $record->save();

            return true;
        } 
    }
}
