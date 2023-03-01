<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('tag/index', ['tags' => $tags]);
    }

    public function create()
    {
        return view('tag/create');
    }

    public function store()
    {
        $tag = request()->validate([
            'title' => 'string'
        ]);
        Tag::create($tag);
        return redirect()->route('tag.index');
    }

    public function show(Tag $tag)
    {
        return view('tag/show', ['tag' => $tag]);
    }
}
