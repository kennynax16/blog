<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $categories = Category::all();
        $posts = Post::all();

        return view('main',compact('categories','posts'));
    }

    public function create(){
        $categories = Category::all();
        return view('create',compact('categories'));
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        $posts = Post::create($data);
        return redirect()->route('index');

    }
    public function show(Category $category){
         $posts = Post::all();
         return view('show',compact('category','posts'));
    }
}
