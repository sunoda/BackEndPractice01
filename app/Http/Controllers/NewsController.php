<?php

namespace App\Http\Controllers;
use app\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('auth/News/index');
    }

    public function store(Request $request){
        $news_data = $request -> all();
        News::create($news_data) -> save();
        return redirect('auth/News/index');
    }
}
