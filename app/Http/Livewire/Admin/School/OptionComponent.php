<?php

namespace App\Http\Livewire\Admin\School;

use App\Models\SchoolOption;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class OptionComponent extends Component
{
    public $state =[];

    public $option;
    protected $listeners=['deleteOptionListener'=>'delete'];
    public function mount(){
        $this->state=['school_id'=>Auth::user()->school->id];
    }
    public function saveOption(){
        $this->validateData();
        SchoolOption::create($this->state);
        $this->dispatchBrowserEvent('data-added',['message'=>"Option created successfull"]);
    }
    public function edit(SchoolOption $option){
        $this->state=$option->toArray();
        $this->option=$option;
    }

    public function updateOption(){
        $this->validateData();
        $this->option->update($this->state);
        $this->state=[];
        $this->state=['school_id'=>Auth::user()->school->id];
        $this->dispatchBrowserEvent('data-updated',['message'=>"Option update successfull"]);
    }

    public function validateData(){
        Validator::make(
            $this->state,
            [
                'name'=>'required'
            ]
        )->validate();
    }

    public function showDeleteOption(SchoolOption $option){
        $this->option=$option;
        $this->dispatchBrowserEvent('show-delete-confirmation-option');
    }
    public function delete(){
        $this->option->delete();
        $this->dispatchBrowserEvent('data-deleted',['message'=>"Option delete successfull"]);
    }

    public function render()
    {
        $options=SchoolOption::all();
        return view('livewire.admin.school.option-component',['options'=>$options]);
    }
}
