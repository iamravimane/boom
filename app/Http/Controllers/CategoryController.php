<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategory;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
       $categories = Category::select('id','title','status')->where('parent_id', NULL)->get();
       return view('admin.category.categories',compact('categories'));
    }

    public function getSubcategories()
    {
       $subcategories = Category::select('id','title','status')->where('parent_id','<>', NULL)->get();
       return view('admin.category.subcategories',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')
                        ->select('id','title')
                        ->where('parent_id', NULL)
                        ->get();
        return view('admin.category.addcategory',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($request->all());
        if ($request->get('parent_id') =='') {
            return redirect('/admin/category')
                        ->with('success','Category added successfully.');
        } else {
            return redirect('/admin/sub-categories')
                        ->with('success','Sub-Category added successfully.');
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
         //return view('pages.admin.category.show');
            $categories= Category::findOrFail($id);
           // dd($categories);
            return view('admin.category.show')->withCategory($categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = DB::table('categories')
                        ->select('id','title')
                        ->where('parent_id', NULL)
                        ->get();
        $catdetails= Category::findOrFail($id);
        return view('admin.category.editcategory',compact('catdetails','categories'));
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

        $category = Category::findOrFail($id);
        $category->title = $request->get('title');
        $category->parent_id = $request->get('parent_id');
        $category->description = $request->get('description');
        $category->status = $request->get('status');
        $category->delete_status = $request->get('delete_status');
        $category->save();

        if ($request->get('parent_id') =='') {
            return redirect('/admin/category')
                        ->with('success','Category added successfully.');
        } else {
            return redirect('/admin/sub-categories')
                        ->with('success','Sub-Category added successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $category= Category::findOrFail($id);
         $category->delete_status='Y';
         $category->save();

    }
    public function selectSubCategories(Request $request)
    {
         $category_id = $request->category;
         $categories = DB::table('categories')
                        ->select('id','title')
                        ->where('parent_id', $category_id)
                        ->get();
         return response()->json($categories);
    }
}
