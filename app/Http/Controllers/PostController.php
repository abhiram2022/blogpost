<?php

namespace App\Http\Controllers;
use App\Models\{Category,Post,Comment};
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Post::all();
        // dd($data);
        return view('admin.dashboard',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::get();
        return view('admin.pages.addpost',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            $request->category_id=>'required',
            $request->title=>'required',
            $request->content=>'required',
         ]);
        Post::insert([
            // 'name'=>$request->name,
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'slug'=>strtolower(str_replace(" ","_",$request->title)),
            'content'=>$request->content,
        ] );
        
        $data=Post::all();
        // dd($data);
        return view('admin.dashboard',compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=Post::FindOrFail($id);
        // dd($post);
        return view('admin.pages.viewpost',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {    
        $categories=Category::all();
        $post=Post::FindOrFail($id);
        return view('admin.pages.editpost',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        dd($request);
        $post=Post::whereId($id)->Update($request);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // dd($request);
        $post=Post::FindorFail($request->id);
        Post::whereId($post->id)->delete();
        // dd($res);

        return redirect()->back();
    }
}
