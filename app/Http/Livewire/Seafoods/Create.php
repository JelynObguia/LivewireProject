<?php

namespace App\Http\Livewire\Seafoods;

use Livewire\Component;
use App\Models\menu; 

class Create extends Component
{
    public $main_dish, $dessert, $beverages, $price;

    public function addMenu(){
        $this->validate([
            'main_dish'  =>    ['required', 'string', 'max:150'],
            'dessert'    =>    ['required', 'string', 'max:150'],
            'beverages'  =>    ['required', 'string', 'max:150'],
            'price'      =>    ['required', 'numeric']
        ]);

        menu::create([
            'main_dish'  =>    $this->main_dish, 
            'dessert'    =>    $this->dessert,
            'beverages'  =>    $this->beverages,
            'price'      =>    $this->price
        ]);

        return redirect('/')->with('message', 'Added Successfully');
    }

    public function updated($propertyPrice)
    {
        $this->validateOnly($propertyPrice, [
            'price'   =>    ['required', 'numeric']
        ]);
    }

    public function render()
    {
        return view('livewire.seafoods.create');
    }
}


