<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        
        return view('admin.tags.index', compact('tags'));
    }

    public function show($id)
    {
        $tag = Tag::findOrfail($id);

        return view("admin.tags.show", compact("tag"));
    }


}
