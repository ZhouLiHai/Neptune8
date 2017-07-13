<?php

namespace Neptune8\Http\Controllers;

use Illuminate\Http\Request;
use Neptune8\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all()->map(function ($item, $key) {
            return ['id' => $item->id, 'name' => $item->name];
        });
        return view('tag.index', ['tags' => $tags]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'max:10000',
            'name' => 'required|max:80',
        ]);

        $tag = null;

        if ($request->id) {
            $tag = Tag::find($request->id);
        } else {
            $tag = new Tag;
        }

        $tag->id = $request->get('id');
        $tag->name = $request->get('name');
        $tag->save();

        session()->flash('success', "标签设置成功~");

        return redirect()->route('tag.index');
    }

    public function update($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tag.edit', [
            'id' => $tag->id,
            'name' => $tag->name]);
    }


    public function edit()
    {
        return view('tag.edit');
    }

    public function destroy($id)
    {
        Tag::destroy($id);
        return redirect()->back();
    }
}
