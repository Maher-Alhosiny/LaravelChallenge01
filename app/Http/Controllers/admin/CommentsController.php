<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment; 
use App\Models\Article;
use App\Models\User;



class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments=Comment::orderBy('id','desc')->get();;
        return view('Comments.comments_list')->with('coms',$comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $allArt=Article::select('id','title')->where('is_active',1)->get();
        $allUsers=User::select('id','name')->get();
        return view('Comments.comments_add')->with('allArt',$allArt)->with('allUser',$allUsers);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        
        $is_active=$request->has('is_active')?1:0;

        $newCom=new Comment();
        $newCom->comment=$request->input('art_Comment');
        $newCom->article_id=$request->input('art_id');
        $newCom->user_id=$request->input('user_id');
        $newCom->is_active=$is_active;
        $result=$newCom->save();

        if($result>0)
            return redirect()->route('com.index')->with('message', 'category addes successful ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
