<?php

namespace Neptune8\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Neptune8\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show($id)
    {
        $article = Article::findOrfail($id);
        return view('layouts.blog')->with($article);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:10000',
            'title' => 'required|max:80',
            'category' => 'required|max:8'
        ]);

        $article = new Article;
        $article->content = $request->get('content');
        $article->title = $request->get('title');
        $article->category_id = 1;
        $article->user_id = Auth::user()->getAuthIdentifier();

        $article->save();

        session()->flash('success', "文章发布成功~");

        return redirect()->back();
    }

    public function update($id)
    {

    }

    public function edit()
    {
        return view('article.edit');
    }

    public function destroy($id)
    {

    }
}

