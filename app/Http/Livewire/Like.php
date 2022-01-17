<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Like extends Component
{


    public $product_id,$record,$user_id ;
    public function mount($product_id){
        $this->record=Product::findOrFail($product_id);
        $this->product_id=$this->record->id;
    }

    public function likeproduct($product_id)
    {
        $like = \App\Models\Like::where('product_id', $product_id)->where('user_id',Auth::id())->first();
        if ($like) {
            $like->delete();
            return back();
        } else {
            \App\Models\Like::create([
                'product_id' => $product_id,
                'user_id'=>Auth::id(),
            ]);
            return back();
        }
    }
    public function render()
    {
        return view('livewire.like');
    }

}
