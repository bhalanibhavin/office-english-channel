<?php

namespace App\Commands\Admin;

use Illuminate\Console\Command;
use App\Http\DB\TrialIeltsForms;

class TrialIeltsFormsStoreCommand extends Command
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
        if($this->operation == 'delete') {
            //Check for exists in other tables or not?

            //Get record and delete it.
            $record = TrialIeltsForms::find($this->data['id']);

            $result = $record->delete();

            if($result) {
                return 'done';
            } else {
                return 'error';
            }
        }
    }
}
