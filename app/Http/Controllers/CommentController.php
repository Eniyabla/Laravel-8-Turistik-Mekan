<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $product_id)
    {
        $this->validate($request, ['message' => 'required|max:1000']); //change comment field to message
        $comment = new Comment();
        $comment->product_id = $product_id;
        $comment->user_id = Auth::id();
        $comment->message = $request->message; //change comment field to message
        $comment->save();

        return redirect()->back()->with('success', 'The comment created successfully');
    }
}
