<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(2);
        return view('welcome', compact('articles'));
    }

    public function byCategory($id){
        $articles = Article::where('category_id', $id)->paginate(3);
        $category = Category::find($id);
        return view('category', compact('articles', 'category'));
    }

    public function detail($id){
        $article = Article::find($id);
        $category = Category::find($article->category_id);
        return view('detail', compact('article','category'));}

    public function writer(){
        $writer = Writer::all();
        return view('writer', compact('writer'));
    }

    public function writerArticle($id){
        $articles = Article::where('writer_id', $id)->paginate(3);
        $writer = Writer::find($id);
        return view('writerArticle', compact('articles', 'writer'));
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function popular(){
        $articles = Article::paginate(3);
        return view('popular', compact('articles'));
    }
}
