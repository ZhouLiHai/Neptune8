<?php

namespace Neptune8\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Neptune8\Article;
use Illuminate\Http\Request;
use Neptune8\Category;
use Neptune8\Tag;
use Parsedown;

class ArticleController extends Controller
{
    public function practice()
    {
        return view("practice");
    }

    public function main()
    {
        return view('main');
    }

    public function blog()
    {
        $markdownParser = new Parsedown();

        $articles = Article::with('category')->orderBy('created_at', 'desc')->simplePaginate(10);

        foreach ($articles as $article) {
            $article->content =$markdownParser->text($article->content);
        }

        return view('blog', ['articles' => $articles]);
    }

    public function index()
    {
        $articles = Article::all()->map(function ($item, $key) {
            return ['id' => $item->id, 'title' => $item->title];
        });
        return view('article.index', ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::findOrfail($id);
        $markdownParser = new Parsedown();
        $article->content = $markdownParser->text($article->content);
        return view('article.show', ['article' => $article]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:10000',
            'title' => 'required|max:80',
        ]);

        $article = new Article;

        $article->content = $request->get('content');
        $article->title = $request->get('title');
        $article->category_id = $request->get('category');
        $article->user_id = Auth::user()->getAuthIdentifier();

        $article->save();

        $tags = Tag::all();
        foreach ($tags as $tag){
            if($request->get('tag'.$tag['id']) != null) {
                $article->tags()->toggle($tag['id']);
            }
        }

        session()->flash('success', "文章发布成功~");

        return redirect()->back();
    }

    public function update($id)
    {
        $categories = Category::all();
        $tags = Tag::all();

        $article = Article::findOrFail($id);
        return view('article.edit', [
            'article' => $article,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function edit()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('article.edit', [
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->route('article.index');
    }
}
