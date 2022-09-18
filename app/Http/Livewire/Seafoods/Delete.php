<?php

namespace App\Http\Livewire\Seafoods;

use App\Models\menu;
use Livewire\Component;

class Delete extends Component
{
    Public $menuId;

    public function getSeafoodProperty(){
        return menu::find($this->menuId);
    }

    public function delete(){
        $this->seafood->delete();

        return redirect('/dashboard')->with('message', 'Deleted Successfully');
    }

    public function back(){
        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.seafoods.delete');
    }
}
