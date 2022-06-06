<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;


class PostsController extends Controller
{
    public function index(){
        $posts = Post::all(); // -> SELECT * FROM posts;
        return view('posts', ['posts' => $posts]);
        // return $posts;
        
    }

    public function newpost(Request $request){
        if ($request -> method() =='POST') {
            $post = new POST(); 
            $post->title = $request->get('title');
            $post->body = $request->get('body');
            $post->user_id = Auth::user()->id;
            if ($post->save()){
                echo "Post has been added in the database!";
                return redirect('/posts');
            };
            
        }
        return view('newpost');
    }

    public function search(Request $request){
        $q = $request->get('q', 'your search does not exist');
        if (!$request->filled('q')) $q = 'your search does not exist';
        else{
            //$posts = Post::where('title', 'like','%'.$q.'%')->get(); 
            // η get ειναι απαραιτητη αλλιως δεν επιστρεφει τις εγγραφες
           $posts = Post::where('title', 'like','%'.$q.'%')->orWhere('body', 'like','%'.$q.'%')->get(); 
        }
        
        return view('posts', ['posts' => $posts]);
    }

    public function post(Post $post){
        return view('post', ['post' => $post]);
    }

    public function edit_post(Post $post, Request $request){
        if ($request -> method() =='POST') {
            // $post = new POST(); 
            $post->title = $request->get('title');
            $post->body = $request->get('body');
            if ($post->save()){
                echo "Post has been added in the database!";
                return redirect('posts');
            };
            
        }

        return view('post', ['post' => $post]);
    }


    public function delete_post(Post $post){
        $post->delete();
        return redirect('posts');
    }

}
