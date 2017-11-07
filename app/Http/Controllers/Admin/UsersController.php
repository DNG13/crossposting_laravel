<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Post;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        if (!empty($keyword)) {
            $users = User::where('name', 'LIKE', "%$keyword%")
                ->paginate(5);
        } else {
            $users = User::orderBy('id', 'asc')
                ->paginate(5);
        }
        return view('admin.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $posts = Post::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(5);
        return view('admin.users.show', compact('user', 'posts'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->validate(request(),[
            'name' => 'required|min:2',
            'email'=>'required|email',
            'is_admin'=>'required|boolean',
        ]);
        $user->update(request(['name', 'email', 'is_admin']));
        return redirect('admin/users');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('admin/users');
    }
}
