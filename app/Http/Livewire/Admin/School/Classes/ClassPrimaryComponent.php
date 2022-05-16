<?php

namespace App\Http\Livewire\Admin\School\Classes;

use App\Models\ClassSchoolPrimary;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ClassPrimaryComponent extends Component
{
    public $state =[];
    public $ROLE_NAME="Teacher";

    public $classen,$teachers=[];
    protected $listeners=['deleteClassPrimaryListener'=>'delete'];
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
        ClassSchoolPrimary::create($this->state);
        $this->dispatchBrowserEvent('data-added',['message'=>"Class created successfull"]);
    }
    public function edit(ClassSchoolPrimary $classe){
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

    public function showDeleteclasse(ClassSchoolPrimary $classe){
        $this->classe=$classe;
        $this->dispatchBrowserEvent('show-delete-confirmation-classe');
    }
    public function delete(){
        $this->classe->delete();
        $this->dispatchBrowserEvent('data-deleted',['message'=>"Class delete successfull"]);
    }
    public function render()
    {
        $classes=ClassSchoolPrimary::where('school_id',auth()->user()->school_id)->get();
        return view('livewire.admin.school.classes.class-primary-component',['classes'=>$classes]);
    }
}
