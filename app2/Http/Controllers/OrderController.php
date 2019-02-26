<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isAdmin == 1){
            $order = Order::with('products')->orderBy('id','DESC')->get();
        }else{
            $order = Order::with('products')->where('customer_id', Auth::user()->id)->get();            
        }
        
        $orders = json_decode($order);
        // var_dump($orders);
        return view('order.order_list')->with('data', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        

        
        return view('order.add_order')->with('data','');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price = $request->price*$request->quantity;
        $placeOrder = new Order([
            'product_id' => $request->id,
            'total_price' => $price,
            'quantity' => $request->quantity,
            'customer_id'=> Auth::user()->id
        ]);

        $placeOrder->save();

        // return view('products.product_list')->with('data', $products);

        return redirect()->action('OrderController@index');
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
        $order = Order::with('products')->where('id', $id)->get();     
        $orders = json_decode($order);
        // foreach ($orders as $key => $value) {
        // echo $value->id;
        //     # code...
        // }
        // var_dump($orders);
        // $order = DB::table('customer_orders')->where('id', $id)->first();

        return view('order.add_order')->with('data', $orders);
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
        // $orders = DB::table('customer_orders')->where('id', $id)->update([
        //     'status' => $request->status
        // ]);

        // return redirect()->action('OrderController@index');
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

    public function status($request)
    {
        $order = Order::with('products')->where('status', $request)->get(); 
        
        $orders = json_decode($order);
        return view('order.order_list')->with('data', $orders);
    }



}
