<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class SettingsAppCompoent extends Component
{
    public $state=[];

    public function mount(){
        $this->state=Setting::first()==null?[]:Setting::first()->toArray();
    }
    public function updateSettings(){
        $setting=Setting::first();
        if ($setting) {
            $setting->update($this->state);
            $this->dispatchBrowserEvent('data-updated',['message'=>"Settings updated successfull!"]);
        } else {
           Setting::create($this->state);
           $this->dispatchBrowserEvent('data-added',['message'=>"Settings added successfull!"]);
        }
        Cache::forget('setting');

    }
    public function render()
    {
        return view('livewire.admin.settings.settings-app-compoent');
    }
}
