<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\SmallArticle;
use Database\Seeders\SmallArticleSeeder;
use Illuminate\Http\Request;

class SmallArticleController extends Controller
{
    public function index()
    {
        $articles = SmallArticle::all();
        $authors = Author::all();
        return view('pages.smallArticles', compact('articles', 'authors'));
    }

    public function create()
    {
        $author = Author::all();
        $article = SmallArticle::all();

        return  view("pages.addsmallarticle", compact('author', 'article'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'author_id' => 'required',
            'text' => 'required',

        ]);

        $store = new SmallArticle();
        $store->text = $request->text;
        $store->author_id = $request->author_id;
        $store->save();
        return redirect('/smallarticles');
    }

    public function destroy($id)
    {
        $delete = SmallArticle::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $article =  SmallArticle::find($id);
        $author =  Author::all();
        return view('pages.editsmallarticles', compact('article', 'author'));
    }

    public function update(Request $request, $id)
    {

        $update = SmallArticle::find($id);
        $update->text = $request->text;
        $update->author_id = $request->author_id;
        $update->save();
        return redirect('/smallarticles');
    }
}
