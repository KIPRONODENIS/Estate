<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddService extends Component
{
	public $name;
	public $description;
	public $image;

	public function submit() {
		dd($this->image);
	}
    public function render()
    {
        return view('livewire.add-service');
    }
}
