<?php

namespace App\Http\Livewire\Admin\School;

use App\Models\Sector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class SectorComponent extends Component
{
    public $state =[];
    public $sector;
    protected $listeners=['deleteSectorListener'=>'delete'];
    public function mount(){
        $this->state=['school_id'=>Auth::user()->school->id];
    }
    public function saveSector(){
        $this->validateData();
        Sector::create($this->state);
        $this->dispatchBrowserEvent('data-added',['message'=>"Sector created successfull"]);
    }
    public function edit(Sector $sector){
        $this->state=$sector->toArray();
        $this->sector=$sector;
    }

    public function updateSector(){
        $this->validateData();
        $this->sector->update($this->state);
        $this->state=[];
        $this->state=['school_id'=>Auth::user()->school->id];
        $this->dispatchBrowserEvent('data-updated',['message'=>"Sector update successfull"]);
    }

    public function validateData(){
        Validator::make(
            $this->state,
            [
                'name'=>'required'
            ]
        )->validate();
    }

    public function showDeleteSector(Sector $sector){
        $this->sector=$sector;
        $this->dispatchBrowserEvent('show-delete-confirmation-sector');
    }
    public function delete(){
        $this->sector->delete();
        $this->dispatchBrowserEvent('data-deleted',['message'=>"Sector delete successfull"]);
    }
    public function render()
    {
        $sectors=Sector::all();
        return view('livewire.admin.school.sector-component',['sectors'=>$sectors]);
    }
}
