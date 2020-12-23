<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function store(Request $request){
        $data = $request->except( '_token');
        $data['user_id'] = Auth::id();
        Post::create($data);

        return redirect()->route('main');
    }
}
