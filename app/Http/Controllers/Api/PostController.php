<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(6);

        $posts->map(function ($post) {

            if ($post->cover_img) {
                $post->cover_img = asset("storage/" . $post->cover_img);
            } else {
                $post->cover_img = asset("images/image-placeholder.jpg");
            }
            

            return $post;
        });
        

        return response()->json($posts);
    }

    public function show($slug)
    {
        $post = Post::where("slug", $slug)->first();

        $post->load("category", "tags", "user:id,name");

        if ($post->cover_img) {
            $post->cover_img = asset("storage/" . $post->cover_img);
        } else {
            $post->cover_img = asset("images/image-placeholder.jpg");
        }

        return response()->json($post);
    }
}
