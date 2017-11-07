<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use App\User;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $users = User::pluck('name', 'id');
        $keyword = $request->get('search');
        if (!empty($keyword)) {
            $posts = Post::where('message', 'LIKE', "%$keyword%")
                ->paginate(5);
        } else {
            $posts = Post::orderBy('id', 'asc')
                ->paginate(5);
        }
        foreach($posts as &$post){
            foreach($users as $id =>$user)
            if($post->user_id == $id){
                $post->user_id = $user;
            }
        }
        return view('admin.posts.index', compact('posts', 'users'));
    }


    public function show(Post $post)
    {
        $users = User::pluck('name', 'id');
        foreach($users as $id =>$user)
            if($post->user_id == $id){
                $post->user_id = $user;
            }
        return view('admin.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $users = User::pluck('name', 'id');
        foreach($users as $id =>$user)
            if($post->user_id == $id){
                $post->user_id = $user;
            }
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $this->validate(request(),[
            'message' => 'required|min:2',
        ]);
        $post->update(request(['message']));
        return redirect('admin/posts');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('admin/posts');
    }
}
