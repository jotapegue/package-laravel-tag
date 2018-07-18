<?php

namespace Jotapegue\Tags\Controllers;

use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;
use Jotapegue\Tags\Models\Tag;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags::index', compact('tags'));
    }

    public function create()
    {
        return view('tags::create');
    }

    public function store(Request $request)
    {
        $tag = Tag::create($request->all());        
        return redirect()->route('tags.show', ['id' => $tag->id]);
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        return view('tags::show')->with('tag', $tag);
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tags::edit')->with('tag', $tag);
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::find($id)->fill($request->all())->save();
        return redirect()->route('tags.show', ['id' => $id]);
    }

    public function destroy(Request $request, $id)
    {
        $tag = Tag::find($id)->delete();
        return redirect()->route('tags.index');
    }
}
