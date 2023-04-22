<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy("uploaded_at", "desc")->get();

        if($request->has("search")) {
            $search_by = $request->input("search");
            $new_posts = collect([]);
            foreach($posts as $post) {
                if(str_contains($post->toJson(), $search_by)) {
                    $new_posts->push($post);
                }
            }

            $posts = $new_posts->count() > 0 ? $new_posts : $posts;

            return view("posts.index", [
                "posts" => $posts,
            ]);
        }

        return view("posts.index", [
            "posts" => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required",
            "body" => "required",
        ]);
        $current_date = date("Y-m-d_H-i-s");
        $data["excerpt"] = Str::limit(strip_tags($data["body"]), 100, "...");
        $data["slug"] = Str::slug($data["title"]) . "_" . $current_date;
        $data["user_id"] = auth()->user()->id;
        $data["uploaded_at"] = $current_date;

        $post = Post::create($data);

        return redirect("/posts/$post->slug");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("posts.detail", [
            "post" => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("posts.edit", [
            "post" => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            "title" => "required",
            "body" => "required",
        ]);
        $current_date = date("Y-m-d_H-i-s");
        $data["excerpt"] = Str::limit(strip_tags($data["body"]), 100, "...");
        $data["slug"] = Str::slug($data["title"]) . "_" . $current_date;

        $post->update($data);

        return redirect("/posts/$post->slug")->with("success", "Post has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/posts')->with("success", "Post has been deleted");
    }
}
