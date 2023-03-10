<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
//        $posts = Post::all();
//        return view('admin.blog.post.index', compact('posts'));
        return view('admin.user.index', compact('users'));
    }
}
