<?php

namespace App\Http\Livewire\Admin\School;

use App\Http\Livewire\Services\UserService;
use App\Models\Role;
use App\Models\School;
use App\Models\Sector;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class TeacherComponent extends Component
{
    public $state =[];
    public $teacher;
    public $sectors,$roles;
    public $ROLE_NAME="Teacher";
    protected $listeners=['deleteTeacherListener'=>'delete'];
    public function mount(){
        $this->state=[
            'school_id'=>Auth::user()->school->id,
            'password'=>Hash::make('password')
        ];
        $this->sectors=Sector::all();
        $this->roles=Role::where('name','=','Teacher')->get();
    }
    public function saveTeacher(){
        $this->validateData();
        User::create($this->state);
        $this->dispatchBrowserEvent('data-added',['message'=>"Teacher created successfull"]);
    }
    public function edit(User $teacher){
        $this->state=$teacher->toArray();
        $this->teacher=$teacher;
    }

    public function updateTeacher(){
        $this->validateData();
        $this->teacher->update($this->state);
        $this->state=[];
        $this->state=['school_id'=>Auth::user()->school->id];
        $this->dispatchBrowserEvent('data-updated',['message'=>"Teacher update successfull"]);
    }

    public function validateData(){
        Validator::make(
            $this->state,
            [
                'name'=>'required',
                'email'=>'required',
                'sector_id'=>'required',
                'gender'=>'required'
            ]
        )->validate();
    }

    public function showDeleteUser(User $user){
        $this->teacher=$user;
        $this->dispatchBrowserEvent('show-delete-confirmation-teacher');
    }
    public function delete(){
        $this->teacher->delete();
        $this->dispatchBrowserEvent('data-deleted',['message'=>"Teacher delete successfull"]);
    }
    public function render()
    {
        $teachers=(new UserService())->getUserByRole($this->ROLE_NAME);
        return view('livewire.admin.school.teacher-component',['teachers'=>$teachers]);
    }
}
