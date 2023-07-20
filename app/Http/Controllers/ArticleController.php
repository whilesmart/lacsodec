<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Article::orderBy('created_at', 'desc')->paginate(20);
        $featuredBlogs = Article::orderBy('created_at', 'desc')->limit(3)->get();

        return view('blog', [
            'blogs' => $blogs,
            'featuredBlogs' => $featuredBlogs,
        ]);
    }

    public function show(Request $request, $blog)
    {
        $blog = Article::with('user')->where('slug', $blog)->first();
        $featuredBlogs = Article::orderBy('created_at', 'desc')->where('id', '!=', $blog->id)->limit(3)->get();

        return view('blog-details', [
            'blog' => $blog,
            'featuredBlogs' => $featuredBlogs,
        ]);
    }
}
