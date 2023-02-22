<?php

namespace App\Http\Controllers;
use File;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return posts with category

        $posts = DB::table('posts')
            ->join('categories', 'posts.category', '=', 'categories.id')
            ->select('posts.*', 'categories.name')
            ->get();
       
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create',[
            'posts' => Post::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
    //  * @param  \App\Http\Requests\StorePostRequest  $request
    //  * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/posts', $request->file('image')->getClientOriginalName());
        } else {
            $image = 'null';
        }
        // dd($image);
        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'category' => $request->input('category'),
            'image' => $image,
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('posts.edit',[
            'posts' => Post::all(),
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
    //  * @param  \App\Http\Requests\UpdatePostRequest  $request
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // dd($request->image);
        //
        dd(phpinfo());
        if ($request->hasFile('image')) {
            $oldLink = Post::where('image', $post->image)->get();
      
            if ($oldLink->count() <= 1) {
          
                File::delete(public_path('storage/posts/' . $post->image));
            }
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/posts', $request->file('image')->getClientOriginalName());
        } else {
            $image = 'null';
        }

    
        $post->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'category' => $request->input('category'),
            'image' => $image,
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
