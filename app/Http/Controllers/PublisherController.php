<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publishers;
use App\Http\Requests\StorePublisher;
use Yajra\Datatables\Datatables;


class PublisherController extends Controller
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
         $publisher_details= Publishers::all();
        //dd($categories);
        return view('admin.publisher.index')->withPublisherdetails($publisher_details);
    }


    public function anyData()
    {
        return Datatables::of(Publishers::query())->make(true);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
         return view('admin.publisher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $filename = null;
         $publishername=$request->input('name');
        if ($request->hasFile('logo_path')) {
            if (!is_dir(public_path(). '/publisherimages/'. $publishername)) {
                mkdir(public_path(). '/publisherimages/'. $publishername, 0777, true);
            }
            $file =  $request->file('logo_path');

            $destinationPath = public_path(). '/publisherimages/'. $publishername;
            $filename = str_random(8) . '_' . $file->getClientOriginalName() ;
            $file->move($destinationPath, $filename); 
        }


        $publisher=new Publishers();
        $publisher->name=$request->input('name');
        $publisher->url=$request->input('url');

        $publisher->page_title=$request->input('page_title');
        $publisher->description=$request->input('description');

        $publisher->address=$request->input('address');
        

        $publisher->meta_keyword=$request->input('meta_keyword');
        $publisher->meta_description=$request->input('meta_description');

        $publisher->logo=$filename;

        $publisher->status=$request->input('status');
        

        $publisher->popularity_status=$request->input('popularity_status');


         $publisher->save();
         return redirect('admin/publishers')
                        ->with('success','Publisher added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publisher_details= Publishers::findOrFail($id);
         
        //     return view('pages.admin.publisher.show1')->withPublisherdetails($publisher_details);

        return view('admin.publisher.show')->withPublisherdetails($publisher_details);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publisher_details=Publishers::findOrFail($id);
      
        return view('admin.publisher.edit')->withPublisherdetails($publisher_details);

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

         if($request->hasFile('logo_path'))
         {
            $filename = null;
           
        
         }else{
            $filename = $request->input('logo_old');
            
         }  

        //  dd($request->hasFile('logo_xpath'));

         $publishername=$request->input('name');

        if ($request->hasFile('logo_path')) {
            if (!is_dir(public_path(). '/publisherimages/'. $publishername)) {
                mkdir(public_path(). '/publisherimages/'. $publishername, 0777, true);
            }
            $file =  $request->file('logo_path');

            $destinationPath = public_path(). '/publisherimages/'. $publishername;
            $filename = str_random(8) . '_' . $file->getClientOriginalName() ;
            $file->move($destinationPath, $filename); 
        }

       


        $publisher= Publishers::findOrFail($id);
        $publisher->name=$request->input('name');
        $publisher->url=$request->input('url');

        $publisher->page_title=$request->input('page_title');
        $publisher->description=$request->input('description');

        $publisher->address=$request->input('address');
        

        $publisher->meta_keyword=$request->input('meta_keyword');
        $publisher->meta_description=$request->input('meta_description');

        $publisher->logo=$filename;

        $publisher->status=$request->input('status');
        

        $publisher->popularity_status=$request->input('popularity_status');


         $publisher->save();
         return redirect('admin/publishers')
                        ->with('success','Publisher Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $publishers= Publishers::findOrFail($id);
         $publishers->delete_status='Y';
         $publishers->save();
         return redirect('admin/publishers')
                        ->with('success','Publisher De-Activated');
    }
}
