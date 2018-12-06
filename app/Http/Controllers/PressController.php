<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pressrelease;
use App\Http\Resources\Pressrelease as PressreleaseR;

class PressController extends Controller
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
        //Get press release

        $pressRelease=Pressrelease::paginate(12);

        return PressreleaseR::collection($pressRelease);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

       // print_r($request->input);
        //exit();
            $pressRelease=$request->isMethod('put')?Pressrelease::findOrFail($request->id):new Pressrelease;

            $pressRelease->id=$request->input('id');
            $pressRelease->title=$request->input('title');
            $pressRelease->description=$request->input('description');
            $pressRelease->content=$request->input('content');
            $pressRelease->url=$request->input('url');
            $pressRelease->pageTitle=$request->input('pageTitle');
            $pressRelease->metaKeyword=$request->input('metaKeyword');
            $pressRelease->metaDescription=$request->input('metaDescription');
            // $pressRelease->status=$request->input('status');
            // $pressRelease->isDeleted=$request->input('isDeleted');

            

            if($pressRelease->save())
            {
                return new Pressrelease($pressRelease);
            }




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

        $pressRelease=Pressrelease::findOrFail($id);


        return New PressreleaseR($pressRelease);
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
        
        $pressRelease=Pressrelease::findOrFail($id);
        if($pressRelease->delete())
        {
        return New PressreleaseR($pressRelease);
        }
    }

   
}
