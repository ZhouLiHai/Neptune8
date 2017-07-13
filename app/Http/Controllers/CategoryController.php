<?php

namespace Neptune8\Http\Controllers;

use Illuminate\Http\Request;
use Neptune8\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all()->map(function ($item, $key) {
            return ['id' => $item->id, 'name' => $item->name];
        });
        return view('category.index', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'max:10000',
            'name' => 'required|max:80',
        ]);

        $category = null;

        if ($request->id) {
            $category = Category::find($request->id);
        } else {
            $category = new Category;
        }

        $category->id = $request->get('id');
        $category->name = $request->get('name');
        $category->save();

        session()->flash('success', "类型设置成功~");

        return redirect()->route('category.index');
    }

    public function update($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', [
            'id' => $category->id,
            'name' => $category->name]);
    }

    public function edit()
    {
        return view('category.edit');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('category.index');
    }
}
