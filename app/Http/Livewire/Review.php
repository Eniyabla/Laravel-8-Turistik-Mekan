<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record ,$subject,$comment,$place_id,$rate;
    public function mount($id){
        $this->record=Product::findOrFail($id);
        $this->place_id=$this->record->id;
    }
    public function render()
    {
        return view('livewire.review');
    }
    private function resetInput(){
        $this->subject=null;
        $this->record=null;
        $this->place_id=null;
        $this->rate=null;
        $this->comment=null;
    }
    public function store(){
        $this->validate([
            'subject'=>'required|min:2',
            'comment'=>'required|min:5',
            'rate'=>'required'
                ]);
        \App\Models\Review::create([
            'place_id'=>$this->place_id,
            'user_id'=>Auth::id(),
            'ip'=>$_SERVER['REMOTE_ADDR'],
             'rate'=>$this->rate,
            'subject'=>$this->subject,
            'comment'=>$this->comment
        ]);
        session()->flash('message','Review send successfully.Thanks!');
        $this->resetInput();
    }



}
