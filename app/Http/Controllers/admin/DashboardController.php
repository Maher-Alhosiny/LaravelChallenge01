<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Models\Comment;



class DashboardController extends Controller
{
    //
    public function index(){
        $catCount=Category::get()->count();
        $artCount=Article::get()->count();
        $comCount=Comment::get()->count();

        return view('admin.dashboard')->with('categoriesCount',$catCount)->with('articlesCount',$artCount)->with('CommentsCount',$comCount);

    }
}
