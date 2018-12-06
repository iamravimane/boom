<?php

namespace App\Http\Controllers;

//use App\Cart;
use App\Http\Requests;
use Illuminate\Http\Request;
use LaraCart;
use Cart;
use Rap2hpoutre\FastExcel\FastExcel;
//use AddToCartRequest;


use App\Http\Requests\AddToCartRequest;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //    foreach($itemHash = LaraCart::getItems() as $item) {
        //       echo  $item->id.',';
        //    }

        foreach(Cart::content() as $row) :
            {
                print_r($row);
            }
        endforeach;
        return view('pages.cart');
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
    public function store(AddToCartRequest $request)
    {        




           Cart::add('1', 'Product 1', 1, 9.99, ['size' => 'large']);
        

            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
       $item = LaraCart::add(2, 'Shirt', 200, 15.99, [
    'size' => 'XL'
]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }


    public function checkout($cart)
    {

      

        return view('pages.checkout');
    }


    public function exampleOfExcelImport(){


    }

     public function exampleOfExcelFrom(){


         return view('pages.excelfrom');

    }
}
