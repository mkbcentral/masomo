<?php

namespace App\Http\Livewire\Admin\School\Classes;

use App\Models\ClassInfantSchool;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ClassInfantComponent extends Component
{
    public $state =[];
    public $ROLE_NAME="Teacher";

    public $classen,$teachers=[];
    protected $listeners=['deleteClassInfantListener'=>'delete'];
    public function mount(){
        $this->state=['school_id'=>Auth::user()->school->id];
        $this->teachers=User::select('users.*')
            ->join('roles','users.role_id','=','roles.id')
            ->where('roles.name',$this->ROLE_NAME)
            ->where('users.school_id',auth()->user()->school->id)
            ->get();
    }

    public function saveClasse(){
        $this->validateData();
        ClassInfantSchool::create($this->state);
        $this->dispatchBrowserEvent('data-added',['message'=>"Class created successfull"]);
    }
    public function edit(ClassInfantSchool $classe){
        $this->state=$classe->toArray();
        $this->classe=$classe;
    }

    public function updateClasse(){
        $this->validateData();
        $this->classe->update($this->state);
        $this->state=[];
        $this->state=['school_id'=>Auth::user()->school->id];
        $this->dispatchBrowserEvent('data-updated',['message'=>"Classe update successfull"]);
    }

    public function validateData(){
        Validator::make(
            $this->state,
            [
                'name'=>'required'
            ]
        )->validate();
    }

    public function showDeleteclasse(ClassInfantSchool $classe){
        $this->classe=$classe;
        $this->dispatchBrowserEvent('show-delete-confirmation-classe-infant');
    }
    public function delete(){
        $this->classe->delete();
        $this->dispatchBrowserEvent('data-deleted',['message'=>"Class delete successfull"]);
    }
    public function render()
    {
        $classes=ClassInfantSchool::where('school_id',auth()->user()->school_id)->get();
        return view('livewire.admin.school.classes.class-infant-component',['classes'=>$classes]);
    }
}
