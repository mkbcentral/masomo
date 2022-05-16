<?php
namespace App\Http\Livewire\Services;

use App\Models\User;

class UserService{
    public function getUserByRole($role){
        return User::select('users.*')
            ->join('roles','users.role_id','=','roles.id')
            ->where('roles.name',$role)
            ->where('users.school_id',auth()->user()->school->id)
            ->get();
    }
}
