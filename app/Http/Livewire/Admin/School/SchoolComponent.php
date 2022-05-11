<?php

namespace App\Http\Livewire\Admin\School;

use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class SchoolComponent extends Component
{
    public $state=['id'=>0];

    public function save(){
       Validator::make(
           $this->state,
            [
                'name'=>'required',
                'phone'=>'required',
                'email'=>'required'
            ]
        )->validate() ;
        $school=School::create($this->state);
        $user=Auth::user();
        $user->school_id=$school->id;
        $user->update();
        $this->dispatchBrowserEvent('data-added',['message'=>"School created successfull"]);
    }
    public function render()
    {
        return view('livewire.admin.school.school-component');
    }
}
