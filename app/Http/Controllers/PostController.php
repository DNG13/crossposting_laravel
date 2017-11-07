<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderby('id', 'desc')
            ->where('user_id', Auth::user()->id)
            ->paginate(10);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,[
            'message' => 'required',
            'tw'=>'boolean',
            'fb'=>'boolean',
            'in'=>'boolean',
        ]);
        //store in database
        $post = new Post();
        $post->message = $request->get('message');
        $post->user_id = Auth::user()->id;
        if($request->get('all')== 1)
        {
            $post->tw = $post->fb = $post->in = 1;
        }
        else {
            $post->tw = $request->get('tw');
            $post->fb = $request->get('fb');
            $post->in = $request->get('in');
        }
        if($post->tw == 0 & $post->fb == 0 & $post->in == 0){
            Session::flash('error', 'Необхідно вибрати хоч одну мережу.');
            return view('posts.create')->withPost($post);
        }
        $post->save();
        Session::flash('success', 'Новий пост відправлено в соц мережі.');
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
