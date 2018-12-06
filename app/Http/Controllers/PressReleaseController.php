<?php

namespace App\Http\Controllers;

use App\Models\PressRelease;
use Illuminate\Http\Request;

class PressReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pressRelease = PressRelease::select('id','title','active_status','popularity_status')->paginate(10);
        return view('admin.pressrelease.pressrelease',compact('pressRelease'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pressrelease.addpress');
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
  
        PressRelease::create($request->all());
   
        return redirect('/admin/press')
                        ->with('success','Press Release added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function show(PressRelease $pressRelease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pressRelease = PressRelease::findOrFail($id);
        return view('admin.pressrelease.pressedit',compact('pressRelease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PressRelease  $pressRelease
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

        $pressRelease = PressRelease::findOrFail($id);
        $pressRelease->title = $request->get('title');
        $pressRelease->url = $request->get('url');
        $pressRelease->content = $request->get('content');
        $pressRelease->description = $request->get('description');
        $pressRelease->page_title = $request->get('page_title');
        $pressRelease->meta_keywords = $request->get('meta_keywords');
        $pressRelease->meta_description = $request->get('meta_description');
        $pressRelease->publish_day = $request->get('publish_day');
        $pressRelease->publish_month = $request->get('publish_month');
        $pressRelease->publish_year = $request->get('publish_year');
        $pressRelease->active_status = $request->get('active_status');
        $pressRelease->delete_status = $request->get('delete_status');
        $pressRelease->popularity_status = $request->get('popularity_status');
        $pressRelease->save();
        return redirect('/admin/press')
                        ->with('success','Press Release updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function destroy(PressRelease $pressRelease)
    {
        //
    }
}
