<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

        $articles = Article::orderBy('id', 'desc')->paginate(50);

        return view('article.extra', compact('articles'));
    }

    public function show($title)
    {
        $article = Article::where('name', $title)->first();
        return view('article.single', compact('article'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'email' => ['required', 'min:5'],
        ]);

        Article::create([
        'name' => $request->name,
        'email' => $request->email,
        ]);

        return redirect('/artikel');
    }

    public function edit($id)
    {
       $article = Article::find($id);
       return view('article.edit', compact('article'));
    }


    public function update(Request $request,$id)
    {
        Article::find($id)->update([
        'name' => $request->name,
        'email' => $request->email,  
        ]);

        return redirect('/artikel');
    }

    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect('/artikel');
    }
}
