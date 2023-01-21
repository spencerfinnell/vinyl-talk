<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function showCreateForm() {
        return view('create-post');
    }

    public function storeNewPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        $newpost = Post::create($incomingFields);

        return redirect("/post/{$newpost->id}")->with('success', 'New Post Created');
    }

    public function showSinglePost(Post $post) {
        $post['body'] = Str::markdown($post->body);
        return view('single-post', ['post' => $post]);
    }

}
