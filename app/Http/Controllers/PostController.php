<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
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
        return view('home', [
            'featured_posts' => Post::latest()->limit(3)->get(),
            'posts' => Post::latest()->get()->skip(3),
        ]);
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
    public function store(Request $request, $user_id)
    {
        if(Auth::user()->role === "admin")
        {
            $path = '';

            $this->validate($request, [
                'team_id' => 'required',
                'e_sport_id' => 'required',
                'slug' => 'required',
                'title' => 'required',
                'image' => 'required',
                'body' => 'required'
            ]);

            if($request->hasFile('image'))
            {
                $path = $request->file('image')->store('public');
                $path = explode('/', $path);
            }

            $request->user()->posts()->create([
                'user_id' => $user_id,
                'team_id' => $request->team_id,
                'e_sport_id' => $request->e_sport_id,
                'slug' => $request->slug,
                'title' => $request->title,
                'image' => $request->image,
                'body' => $request->body,
                'image' => $path[1]
            ]);

            return back();
        }

        return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, User $user)
    {
        // if(Auth::user()->role === "admin")
        // {
        //     return view('posts.edit', ['post' => $post]);
        // }

        // if(Auth::user()->role === "user" && $post->user_id === $user->id)
        // {
        //     return view('posts.edit', ['post' => $post]);
        // }
        //test
        return view('posts.edit', ['post' => $post]);

        return back()->with('error', 'You do not have permissions to edit this post');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post, User $user)
    {
        if(Auth::user()->role === "admin")
        {
            if($request->hasFile('image'))
            {
                $path = $request->file('image')->store('public');
                $path = explode('/',$path);
                $post->image = $path[1];
            }

            $post->body = $request->body;
            $post->save();

            return redirect()->route("home");
        }

        if(Auth::user()->role === "user" && $post->user_id === $user->id)
        {
            if($request->hasFile('image'))
            {
                $path = $request->file('image')->store('public');
                $path = explode('/',$path);
                $post->image = $path[1];
            }

            $post->body = $request->body;
            $post->save();

            return redirect()->route("home");
        }

        return back()->with('error', 'You do not have permissions to update this post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, User $user)
    {
        if(Auth::user()->role === "admin")
        {
            $post->delete();

            return back()->with('success', 'Post Deleted!');
        }

        if(Auth::user()->role === "user" && $post->user_id === $user->id)
        {
            $post->delete();

            return back()->with('success', 'Post Deleted!');
        }

        return back()->with('error', 'You do not have permissions to delete this post');
    }
}
