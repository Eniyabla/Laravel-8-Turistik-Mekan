<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Product;

class Search extends Component
{
    public $search="";
    public function render()
    {
        $datalist=Product::where('title','like','%'.$this->search.'%')->get();
        return view('livewire.search',['datalist'=>$datalist,'query'=>$this->search]);
    }
   #return view('livewire.search');
}
