<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         //add a new task fetching all the users from the database
         $users = User::all();
        return view('blogs.create', compact( 'users')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'user_id' => 'required|exists:users,id' // Validate that the user_id exists in the users table
    ]);

    // Create and save the blog
    $blog = new Blog();
    $blog->title = $validateData['title'];
    $blog->description = $validateData['description'];
    $blog->user_id = $validateData['user_id'];
    $blog->save();    

    return redirect()->route('blogs.index')->with('success', 'Blog created successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required|exists:user,id'  // Make sure it is an integer greater than zero
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $validateData['title'];
        $blog->description = $validateData['description'];
        $blog->user_id = $validateData['user_id'];
        $blog->update($request->all());

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }
}
