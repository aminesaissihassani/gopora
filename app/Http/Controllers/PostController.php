<?php

namespace App\Http\Controllers;

use App\Models\ESport;
use App\Models\Post;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd(Post::latest()->paginate(5)->skip(3));
        $ids = Post::latest()->take(3)->pluck('id');

        $posts = Post::latest()->whereNotIn('id', $ids)->paginate(5);

        return view('home', [
            'featured_posts' => Post::latest()->limit(3)->get(),
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create',[
            'esports' => ESport::latest()->get(),
            'teams' => Team::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(Auth::user()->id);
        // dd($request->file('image')->store('images', 'public'));

        // $path = '';

        $this->validate($request, [
            'team_id' => '',
            'e_sport_id' => 'required',
            'slug' => 'required|unique:posts,slug|max:255',
            'title' => 'required|max:255',
            'image' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('image'))
        {
            $path = $request->file('image')->store('images', 'public');
            $path = explode('/', $path);
        }

        $request->user()->posts()->create([
            'user_id' => Auth::user()->id,
            'team_id' => $request->team_id,
            'e_sport_id' => $request->e_sport_id,
            'slug' => $request->slug,
            'title' => $request->title,
            'image' => $path[1],
            'body' => $request->body
        ]);

        return redirect('posts/'. $request->slug);
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
    public function edit(Post $post)
    {
        if(Auth::user()->role !== "admin" && $post->user_id !== Auth::user()->id) return redirect()->route("home")->with('error', 'You do not have permissions to edit this post');

        return view('posts.edit', [
            'post' => $post,
            'esports' => ESport::latest()->get(),
            'teams' => Team::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if(Auth::user()->role !== "admin" && $post->user_id !== Auth::user()->id) return redirect()->route('home')->with('error', 'You do not have permissions to update this post');

        $this->validate($request, [
            'team_id' => '',
            'e_sport_id' => 'required',
            'title' => 'required|max:255',
            'image' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('image'))
        {
            $path = $request->image->store('images', 'public');
            $path = explode('/', $path);
        }

        Storage::delete('/public/images/'. $post->image);

        $post->team_id = $request->team_id;
        $post->e_sport_id = $request->e_sport_id;
        $post->title = $request->title;
        $post->image = $path[1];
        $post->body = $request->body;

        $post->update();

        return redirect('/posts/'. $post->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(Auth::user()->role !== "admin" && $post->user_id !== Auth::user()->id) return redirect()->route('home')->with('error', 'You do not have permissions to delete this post');

        Storage::delete('/public/images/'. $post->image);

        $post->delete();

        return redirect()->route("home")->with('success', 'Post Deleted!');
    }
}
