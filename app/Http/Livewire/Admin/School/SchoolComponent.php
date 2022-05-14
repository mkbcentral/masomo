<?php

namespace App\Http\Livewire\Admin\School;

use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class SchoolComponent extends Component
{
    use WithFileUploads;
    public $state=['id'=>0];
    public $logo_url;

    public function save(){
       Validator::make(
           $this->state,
            [
                'name'=>'required',
                'phone'=>'required',
                'email'=>'required'
            ]
        )->validate() ;
        $school=School::create([
            'name'=>$this->state['name'],
            'phone'=>$this->state['phone'],
            'email'=>$this->state['email'],
            'logo_url'=>$this->getImagePath($this->logo_url),
        ]);
        $user=Auth::user();
        $user->school_id=$school->id;
        $user->update();
        $preview=$user->school->logo_url;

        $this->cleanupOldUploads();
        $this->dispatchBrowserEvent('data-added',['message'=>"School created successfull"]);
    }

    public function getImagePath($image){
        $logo_name=time().'_'.$image->getClientOriginalName();
        $logo_path = $image->storeAs('logos', $logo_name,'public');
        return $logo_path;
    }

    protected function cleanupOldUploads()
    {
        $storage = Storage::disk('local');
        foreach ($storage->allFiles('livewire-tmp') as $filePathname) {
            // On busy websites, this cleanup code can run in multiple threads causing part of the output
            // of allFiles() to have already been deleted by another thread.
            if (! $storage->exists($filePathname)) continue;
            $yesterdaysStamp = now()->subSecond(5)->timestamp;
            if ($yesterdaysStamp > $storage->lastModified($filePathname)) {
                $storage->delete($filePathname);
            }
        }
    }
    public function render()
    {
        return view('livewire.admin.school.school-component');
    }
}
