<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function index()
    {
        $author = Author::all();
        $article = Article::all();

        return  view('welcome', compact('author', 'article'));
    }

    public function create()
    {
        $author = Author::all();
        $article = Article::all();

        return  view("pages.articles", compact('author', 'article'));
    }
    public function store(Request $request)
    {
        Storage::put('public/img/', $request->file('src'));
        $request->validate([
            'author_id' => 'required',
            'title' => 'required',
            'text' => 'required',
            'src' => 'required'
        ]);

        $store = new Article();
        $store->src = $request->file('src')->hashName();
        $store->text = $request->text;
        $store->title = $request->title;
        $store->author_id = $request->author_id;
        $store->save();
        return redirect('/');
    }

    public function newArticle()
    {
        // $articles = Article::all();
        return view("pages.articles");
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view("pages.fullArticle", compact('article'));
    }

    public function destroy($id)
    {
        $delete = Article::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $article =  Article::find($id);
        $author =  Author::all();
        return view('pages.editArticle', compact('article', 'author'));
    }

    public function update(Request $request, $id)
    {
        Storage::put('public/img/', $request->file('src'));

        $update = Article::find($id);
        $update->title = $request->title;
        $update->src = $request->file('src')->hashName();
        $update->text = $request->text;
        $update->author_id = $request->author_id;
        $update->save();
        return redirect('/');
    }
}
