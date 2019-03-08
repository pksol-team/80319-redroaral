<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Products;
use App\User;
use App\Order;





class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $reqests = [];
    if(Auth::user()->isAdmin == 1){
        $customer  = DB::table('users')->where('isAdmin', 2)->orderBy('user_id','DESC')->get();
           $customer_count  = DB::table('users')->where('isAdmin', 2)->count();
           if(!$customer->isEmpty())   {
                
            //   foreach ($customer as $key => $value) {
            //          $bronze_lead =  DB::table('customer_order')
            //                          ->join('products', 'customer_order.product_id', '=', 'products.id')
            //                          ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Bronze')->where('customer_order.lead_id', $value->user_id)
            //                          ->count();
            //               $silver_lead =  DB::table('customer_order')
            //                           ->join('products', 'customer_order.product_id', '=', 'products.id')
            //                           ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Silver')->where('customer_order.lead_id', $value->user_id)
            //                           ->count();
            //               $gold_lead =  DB::table('customer_order')
            //                          ->join('products', 'customer_order.product_id', '=', 'products.id')
            //                          ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Gold')->where('customer_order.lead_id', $value->user_id)
            //                          ->count();
            //               $bronze_sales =  DB::table('customer_order')
            //                           ->join('products', 'customer_order.product_id', '=', 'products.id')
            //                           ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Bronze')->where('customer_order.lead_id', $value->user_id)
            //                           ->count();
            //                 $silver_sales =  DB::table('customer_order')
            //                             ->join('products', 'customer_order.product_id', '=', 'products.id')
            //                             ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Silver')->where('customer_order.lead_id', $value->user_id)
            //                             ->count();
            //                 $gold_sales =  DB::table('customer_order')
            //                           ->join('products', 'customer_order.product_id', '=', 'products.id')
            //                           ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Gold')->where('customer_order.lead_id', $value->user_id)
            //                           ->count();
                   
            //               $requests['products_order'][] = [
            //                       'user' =>   $value->name,
            //                       'bronze_lead' => $bronze_lead,
            //                       'silver_lead' => $silver_lead,
            //                       'gold_lead' => $gold_lead,
            //                       'bronze_sales' => $bronze_sales,
            //                       'silver_sales' => $silver_sales,
            //                       'gold_sales' => $gold_sales
            //                   ];
            //   }
             foreach ($customer as $key => $value) {
                     $bronze_lead =  DB::table('lead_gen_request')
                                     ->join('customer_order', 'lead_gen_request.order_id', '=', 'customer_order.order_id') 
                                     ->join('products', 'customer_order.product_id', '=', 'products.id')
                                     ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Bronze')->where('lead_gen_request.lead_id', '=', $value->user_id)->count();
                           $silver_lead =  DB::table('lead_gen_request')->join('customer_order', 'lead_gen_request.order_id', '=', 'customer_order.order_id')
                                       ->join('products', 'customer_order.product_id', '=', 'products.id')
                                       ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Silver')->where('lead_gen_request.lead_id', '=', $value->user_id)
                                       ->count();
                           $gold_lead =  DB::table('lead_gen_request')->join('customer_order', 'lead_gen_request.order_id', '=', 'customer_order.order_id')
                                     ->join('products', 'customer_order.product_id', '=', 'products.id')
                                     ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Gold')->where('lead_gen_request.lead_id', '=', $value->user_id)
                                     ->count();
                           $bronze_sales =  DB::table('lead_gen_request')->join('customer_order', 'lead_gen_request.order_id', '=', 'customer_order.order_id')
                                       ->join('products', 'customer_order.product_id', '=', 'products.id')
                                       ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Bronze')->where('lead_gen_request.lead_id', '=', $value->user_id)
                                       ->count();
                            $silver_sales =  DB::table('lead_gen_request')->join('customer_order', 'lead_gen_request.order_id', '=', 'customer_order.order_id')
                                        ->join('products', 'customer_order.product_id', '=', 'products.id')
                                        ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Silver')->where('lead_gen_request.lead_id', '=', $value->user_id)
                                        ->count();
                            $gold_sales =  DB::table('lead_gen_request')->join('customer_order', 'lead_gen_request.order_id', '=', 'customer_order.order_id')
                                       ->join('products', 'customer_order.product_id', '=', 'products.id')
                                       ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Gold')->where('lead_gen_request.lead_id', '=', $value->user_id)
                                       ->count();
                   
                           $requests['products_order'][] = [
                                   'user' =>   $value->name,
                                   'bronze_lead' => $bronze_lead,
                                   'silver_lead' => $silver_lead,
                                   'gold_lead' => $gold_lead,
                                   'bronze_sales' => $bronze_sales,
                                   'silver_sales' => $silver_sales,
                                   'gold_sales' => $gold_sales
                               ];
               }
            //   echo $bronze_lead;
              return view('home')->with('data', $requests);
           }
          return view('home')->with('data', ''); 
           
         // $customer  = DB::table('users')->where('isAdmin', 3)->orWhere('isAdmin', 4)->orderBy('user_id','DESC')->get();
         //    $customer_count  = DB::table('users')->where('isAdmin', 3)->orWhere('isAdmin', 4)->count();
         //    if(!$customer->isEmpty())   {
         //        foreach ($customer as $key => $value) {
         //              $bronze_lead =  DB::table('customer_order')
         //                              ->join('products', 'customer_order.product_id', '=', 'products.id')
         //                              ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Bronze')->where('customer_order.customer_id', $value->user_id)
         //                              ->count();
                         
         //                    $silver_lead =  DB::table('customer_order')
         //                                ->join('products', 'customer_order.product_id', '=', 'products.id')
         //                                ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Silver')->where('customer_order.customer_id', $value->user_id)
         //                                ->count();
         //                    $gold_lead =  DB::table('customer_order')
         //                              ->join('products', 'customer_order.product_id', '=', 'products.id')
         //                              ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Gold')->where('customer_order.customer_id', $value->user_id)
         //                              ->count();
         //                    $bronze_sales =  DB::table('customer_order')
         //                                ->join('products', 'customer_order.product_id', '=', 'products.id')
         //                                ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Bronze')->where('customer_order.customer_id', $value->user_id)
         //                                ->count();
         //                     $silver_sales =  DB::table('customer_order')
         //                                 ->join('products', 'customer_order.product_id', '=', 'products.id')
         //                                 ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Silver')->where('customer_order.customer_id', $value->user_id)
         //                                 ->count();
         //                     $gold_sales =  DB::table('customer_order')
         //                                ->join('products', 'customer_order.product_id', '=', 'products.id')
         //                                ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Gold')->where('customer_order.customer_id', $value->user_id)
         //                                ->count();
                    
         //                    $requests['products_order'][] = [
         //                            'user' =>   $value->name,
         //                            'bronze_lead' => $bronze_lead,
         //                            'silver_lead' => $silver_lead,
         //                            'gold_lead' => $gold_lead,
         //                            'bronze_sales' => $bronze_sales,
         //                            'silver_sales' => $silver_sales,
         //                            'gold_sales' => $gold_sales
         //                        ];
         //        }
         //        return view('home')->with('data', $requests);
         //    }
         //    return view('home')->with('data', ''); 
    }
    else if(Auth::user()->isAdmin == 2){
         $lead_gen_requests = DB::table('customer_order')
        ->join('products', 'customer_order.product_id', '=', 'products.id')
        ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('customer_order.status', '=', 'Pending')->orderBy('customer_order.order_id', 'DESC')->get();
        return view('home')->with('data', $lead_gen_requests);

    }
    else{
        $lead_gen_requests = DB::table('customer_order')
        ->join('products', 'customer_order.product_id', '=', 'products.id')
        ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('customer_order.request_status', '=', 'Active')->where('users.isAdmin', '=', Auth::user()->isAdmin)->get();
        return view('home')->with('data', $lead_gen_requests);
    }

                  
        
               
        

    }
    public function admin()
    { 
        return view('auth.admin'); 
    }

    // public function client()
    // { 
        
    //     $clients  = DB::table('users')->where('isAdmin', 3)->get(); 

    //     $purchased = array();
        
    //     foreach ($clients as $key => $value) {

    //         $order = Order::with('users')->where('customer_id', $value->user_id)->count();
    //         $orders = json_decode($order);


    //         array_push($purchased, $orders);

    //     }

    //     $total = array(
    //         'clients' => $clients, 
    //         'purchased'=> $purchased
    //     );


    //     // for ($i = 0; $i < count($total); $i++){
            
    //     //         # code...
    //     //       echo $total['clients'][$i]->id;                 
    //     // }
            
    //     // echo count($total);
    //     // var_dump($total['clients'][0]->id);

    //     // foreach ($orders as $key => $value) {
    //     // }
    //         // var_dump($orders);

    //     return view('client')->with('data', $total); 
    // }
}
