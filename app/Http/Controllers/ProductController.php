<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->orderBy('id', 'DESC')->get();

        return view('products.product_list')->with('data', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.add_product')->with('data','');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addProduct = new Products([
            'product_name' => $request->product_name,
            'staff_id' => Auth::user()->id,
            'in_stock' => $request->in_stock,
            'price' => $request->price
        ]);

        $addProduct->save();

        return redirect()->action('ProductController@index');

        // redirect('index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();

        return view('products.show')->with('data', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = DB::table('products')->where('id', $id)->first();

        return view('products.add_product')->with('data', $products);
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

        // return "update";
       
        $products = DB::table('products')->where('id', $id)->update([
            'product_name' => $request->product_name,
            'in_stock' => $request->in_stock,
            'price' => $request->price
        ]);

        return redirect()->action('ProductController@index');

        return redirect()->route('product');
        $products->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect()->action('ProductController@index');
    }

    
}
