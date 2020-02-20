<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Order extends Component
{
	public $user;
	public $service;

	public $date;
	public $estate;
	public $success="";

	 public function mount($user,$service) {
$this->success="";
$this->user=$user->toArray();
$this->service=$service->toArray();
	 }

	 //submit function

	 public function submit()  {
	 	$this->validate(['date'=>'required',
	 		'estate'=>'required|min:2']);


	 	//then create the order 
  $order=\App\Order::create([
'ordering_id'=>\Auth::id(),
'service_id'=>$this->service['id'],
'service_owner'=>$this->user['id'],
'estate'=>$this->estate,
'date'=>$this->date
  ]); 

$this->success="true";


	 }

	 //functiom to close 

	 public function close() {
	 $this->success="";
	 }
    public function render()
    {
        return view('livewire.order');
    }
}
