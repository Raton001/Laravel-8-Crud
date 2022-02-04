<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function addPost() 
    {
        return view ('add-post');
    }

    public function savePost(Request $request)
    {
        DB::table('posts')->insert([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        
        return back()->with('post_add','Post Succesfully Added');
    }

    public function listPost()
    {
       $posts= DB::table('posts')->get();
       return view('post-list', compact('posts'));
    }

    public function editPost($id)
    {
         $post= DB::table('posts')->where ('id', $id)->first();
         return view('edit-post', compact('post'));
    }

    public function updatePost(Request $request)
    {
        DB::table('posts')->where('id', $request->id)->update([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
       return back()->with('post_update', 'Post Update Successfully');
    }

    public function deletePost($id)
    {
        DB::table('posts')->where ('id', $id)->delete();
        return back()->with('post_delete', 'Post deleted Successfully');
    }

}
