<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Like extends Component
{


    public $product;
    public $user;

    final public function mount($product): void
    {
        $this->user = Auth()->user();
        $this->product = Product::findOrFail($product);
    }

    final public function store(): void
    {
        if ($this->user->id === $this->product->user_id) {
            $this->dispatchBrowserEvent('error', ['type' => 'error',  'message' => 'You Cannot Like Your Own product!']);

            return;
        }

        $exist = Like::where('user_id', '=', $this->user->id)->where('product_id', '=', $this->product->id)->first();
        if ($exist) {
            $this->dispatchBrowserEvent('error', ['type' => 'error',  'message' => 'You Have Already Liked Or Disliked This product!']);

            return;
        }

        $new = new Like();
        $new->user_id = $this->user->id;
        $new->product_id = $this->product->id;
        $new->like = 1;
        $new->save();

        $this->dispatchBrowserEvent('success', ['type' => 'success',  'message' => 'Your Like Was Successfully Applied!']);
    }



    public function render()
    {
        return view('livewire.like');
    }
}
