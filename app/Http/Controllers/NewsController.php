<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bmrnews = News::select('id','title','active_status','popularity_status')->paginate(10);
        return view('admin.news.news',compact('bmrnews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.addnews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'content' => 'required',
            'description' => 'required',
            'page_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
            'publish_day' => 'required',
            'publish_month' => 'required',
            'publish_year' => 'required',

        ]);
  
        News::create($request->all());
   
        return redirect('admin/news')
                        ->with('success','News added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.newsedit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'content' => 'required',
            'description' => 'required',
            'page_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
            'publish_day' => 'required',
            'publish_month' => 'required',
            'publish_year' => 'required',
            'active_status' => 'required',
            'delete_status' => 'required',
            'popularity_status' => 'required',
        ]);

        $news = News::findOrFail($id);
        $news->title = $request->get('title');
        $news->url = $request->get('url');
        $news->content = $request->get('content');
        $news->description = $request->get('description');
        $news->page_title = $request->get('page_title');
        $news->meta_keywords = $request->get('meta_keywords');
        $news->meta_description = $request->get('meta_description');
        $news->publish_day = $request->get('publish_day');
        $news->publish_month = $request->get('publish_month');
        $news->publish_year = $request->get('publish_year');
        $news->active_status = $request->get('active_status');
        $news->delete_status = $request->get('delete_status');
        $news->popularity_status = $request->get('popularity_status');
        $news->save();
        return redirect('/admin/news')
                        ->with('success','News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
