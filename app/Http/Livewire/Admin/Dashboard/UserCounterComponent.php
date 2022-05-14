<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\User;
use Livewire\Component;

class UserCounterComponent extends Component
{
    public $usersCount;

    public function mount(){
        $this->getUsersCount();;
    }

    public function getUsersCount($option=1)
    {
      return $this->usersCount=User::query()
            ->whereBetween('created_at',$this->getDateRange($option))
            ->where('school_id',auth()->user()->school->id)
            ->count();
    }

    public function getDateRange($option){
        if ($option==1) {
            return [now()->today(),now()];
        }
        if ($option=="MTD") {
            return [now()->firstOfMonth(),now()];
        }
        if ($option=="YTD") {
            return [now()->firstOfYear(),now()];
        }
        return [now()->subDays($option),now()];

    }
    public function render()
    {
        return view('livewire.admin.dashboard.user-counter-component');
    }
}
