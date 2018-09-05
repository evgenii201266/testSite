<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest\CreatePostRequest;
use App\Http\Requests\PostRequest\UpdatePostRequest;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderDescAuth(4);
        return view('post.post-index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $post = Post::create(['title' => $request->title,
                              'body' => $request->body,
                               'name_author' => Post::getUserName()]);

        $request->session()->flash('success', 'Post created');

        return redirect()->route('post-panel.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $post = Post::find($id);
        Post::checkUserRequest($post->name_author);
        return view('post.pages.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        Post::checkUserRequest($post->name_author);
        return view('post.pages.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(UpdatePostRequest $request, $id)
    {
        $post = Post::find($id);
        Post::checkUserRequest($post->name_author);
        $post->body = $request->body;
        $post->save();

        $request->session()->flash('success', 'Post updated');

        return redirect()->route('post-panel.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $post = Post::find($id);
        Post::checkUserRequest($post->name_author);
        $post->delete();
        return redirect()->route('post-panel.index');
    }

    //Main page

    public function postView()
    {    
        $posts = Post::orderDescAll(9);
        return view('post.view')->withPosts($posts);
    }

    public function showMain($id)
    {
        $post = Post::find($id);
        Post::checkUserRequest($post->name_author);
        return view('post.show-main')->withPost($post);
    }
}
