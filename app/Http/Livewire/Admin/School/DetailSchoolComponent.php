<?php

namespace App\Http\Livewire\Admin\School;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class DetailSchoolComponent extends Component
{
    use WithFileUploads;
    public $logo;

    public function updatedLogo(){
        $school=auth()->user()->school;
        $preview=$school->logo_url;
        $school->logo_url=$this->getImagePath($this->logo);
        $school->update();
        Storage::disk('public')->delete($preview);
        $this->cleanupOldUploads();
        $this->dispatchBrowserEvent('data-updated',['message'=>'Logo update successfull !']);
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
        //dd(Auth::user()->school->logo_url);
        return view('livewire.admin.school.detail-school-component');
    }
}
