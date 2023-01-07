<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;

class BlogController extends Controller
{
    public static function index(){
        
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title .= ' in ' . $category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title .= ' from ' . $author->name;
        }

        return view('blog', [
            "title" => "The Latest Blog" . $title,
            "posts" => Blog::latest()->filter(request(['search', 'category', 'author']))->paginate(8)->withQueryString(),
            "categories" => Category::all(),
            "authors" => User::all(),
        ]);
    }

    public static function show(Blog $blog){
        return view('blog_detail', [
            "title" => $blog->author->name,
            "post" => $blog,
        ]);
    }
}