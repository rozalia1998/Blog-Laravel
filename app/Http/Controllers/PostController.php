<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::all();
        return view('posts/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {     
        $users=User::all(); 
        return view('posts/create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post=Post::create([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'user_id'=>$request->user_id
        ]);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users=User::all();
        $post=Post::findorfail($id);
        return view('posts/edit',compact('post','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $post = Post::findorfail($id)->update([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'user_id'=>$request->user_id
        ]);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Post::findorfail($id)->delete();
        Post::destroy($id);
        return redirect()->route('posts.index');
    }

    public function showUserPost($user_id){
        $posts=DB::table('posts')->where('user_id',$user_id)->get();
        
        // $posts = Post::findorfail($user_id);
        return view('posts/search',compact('posts'));
    }
}
