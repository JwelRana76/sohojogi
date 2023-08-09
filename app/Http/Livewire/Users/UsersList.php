<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User; // Replace with your model

class UsersList extends Component
{
    use WithPagination;
    
    public function render()
    {
        $data = User::paginate(10);


        return view('livewire.users.users-list', compact('data'));
    }
}
