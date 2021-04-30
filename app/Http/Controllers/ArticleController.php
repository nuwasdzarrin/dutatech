<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $posts = Article::query()->published()->orderBy('id', 'desc')->paginate()->appends(request()->query());
        return response()->view('article', ['posts'=>$posts]);
    }
}
