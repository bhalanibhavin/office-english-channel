<?php

namespace App\Commands\Admin;

use Illuminate\Console\Command;
use App\Http\DB\Administrator;

class AdministratorStoreCommand extends Command
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
        if($this->operation == 'new') {

            $record                     = new Administrator;

            $record->email              = $this->data['email'];
            $record->first_name         = $this->data['first_name'];
            $record->last_name          = $this->data['last_name'];
            $record->password           = bcrypt($this->data['password']);
            $record->status             = @(isset($this->data['status']))?'1':'0';
            $record->save();

            return true;
        } else if($this->operation == 'edit') {
            
            $record                     = Administrator::find($this->data['id']);
            
            $record->email              = $this->data['email'];
            $record->first_name         = $this->data['first_name'];
            $record->last_name          = $this->data['last_name'];
            // $record->password           = bcrypt($this->data['password']);
            $record->status             = @(isset($this->data['status']))?'1':'0';            
            $record->save();

            return true;
        } else if($this->operation == 'delete') {
            //Check for exists in other tables or not?

            //Get record and delete it.
            $record = Administrator::find($this->data['id']);
            $result = $record->delete();

            if($result) {
                return 'done';
            } else {
                return 'error';
            }
        }
    }
}
