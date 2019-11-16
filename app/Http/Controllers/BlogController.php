<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::paginate(10);
        return view ('blogs.index')->with(compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $blog= new Blog();
//        $blog ->title =$request->get('title');
//        $blog ->body =$request->get('body');
//        $blog ->save();
//
//        return redirect() ('blog.index');

        $blog= Blog::create ($request->only('title','body'));

        return redirect()->route('blogs.index')->with(['alert-type'=>'alert success','alert'=>'your blog saved']);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view ('blogs.show')->with(compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view ('blogs.edit')->with(compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->only('title','body'));

        return redirect()->route('blogs.index')->with(['alert-type'=>'alert success','alert'=>'Your Blog is Now Saved']);
    }

//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Blog  $blog
//     * @return \Illuminate\Http\Response
//     */

    public function padam(Blog $blog)
    {
    $blog->delete();
        return redirect()->route('blogs.index')->with(['alert-type'=>'alert success','alert'=>'Your Blog is Now Deleted']);
    }
}
