<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request){
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        Comment::create($data);

        return redirect()->back();
    }
}
