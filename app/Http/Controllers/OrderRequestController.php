<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\OrderRequest;
use App\User;

class OrderRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        if(Auth::user()->isAdmin == 1){
        $order_request = DB::table('order_request')->orderBy('id','DESC')->get();
        }else
        $order_request = DB::table('order_request')->where('user_id', $id)->orderBy('id','DESC')->get();

        return view('order_request')->with('data', $order_request);
        // echo $order_request;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order_request = new OrderRequest([
            'user_id'=> Auth::user()->id,
            'devices'=> $request->devices,
            'ip_address'=> $request->ip_address,
            'created_at' => date('Y-m-d') 
        ]);
        $order_request->save();

           
        // DB::table('order_request')->insert([
        //     'user_id'=> Auth::user()->id,
        //     'devices'=> $request->devices,
        //     'ip_address'=> $request->ip_address,
        //     'created_at'=> date('Y-m-d') 
        // ]);

        return redirect()->action('OrderRequestController@index');
        
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
       $order_request = DB::table('order_request')->where('id', $id)->first();
       // var_dump($order_request);
         // $order_request = OrderRequest::findOrFail($id);
        // return view('order_request_edit')->with('data', $order_request);
       return view('order_request_edit')->with('data', $order_request);
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
        
       $order_request = DB::table('order_request')->where('id', $id)->update([ 
            'status' => $request->status
        ]);

        return redirect()->action('OrderRequestController@index');

       // return view()
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('order_request')->where('id', '=', $id)->delete();
        return redirect()->action('OrderRequestController@index');

    }
    public function purchase()
    {
       $purchased = DB::table('order_request')->where('purchased', 1)->orderBy('created_at', 'ASC')->get();
        
       return view('purchase')->with('data', $purchased);
        

    }
    public function clients(){

        $customer = new User();

        

        // $clients = DB::table('users')->where('isAdmin', NULL)->orderBy('id','DESC')->get();

        // $clients->purchased = DB::table('order_request')->where('user_id', $clients->id)->count(); 
        
        // return view("clients")->with('data', $clients);
    
    }
    // public function totaldata()
    // {
    //    $purchased  = DB::table('order_request')->count();
    //    $clients = DB::table('users')->where('isAdmin', NULL)->count();
    //    $pending = DB::table('order_request')->where('status', 'Pending')->count();
    //    $processing = DB::table('order_request')->where('status', 'Processing')->count();
    //    $complete = DB::table('order_request')->where('status', 'Complete')->count();

    //    // $clients = DB::table('users')->where('isAdmin', NULL)->count();

    //    $total = array(
    //     'purchased' => $purchased, 
    //     'clients'=> $clients,
    //     'pending'=> $pending,
    //     'processing'=> $processing,
    //     'complete'=> $complete
    // );
    
    // // var_dump($total);
    //    return view('home')->with('data', $total);
        

    // }

}
