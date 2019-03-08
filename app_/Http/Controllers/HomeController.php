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
        // Previous
        // $products_count  = DB::table('products')->count();
        // $products  = DB::table('products')->get();
        // $clients  = DB::table('users')->where('isAdmin', 4)->orWhere('isAdmin', 3)->get();
        // $clients_count  = DB::table('users')->where('isAdmin', 4)->orWhere('isAdmin', 3)->count();

        // $orders  = DB::table('customer_order')->count();
        // $quantity = 0;
        // $users = [];
        // $products_array = [];

        // for ($i=0; $i < $clients_count; $i++) { 
           
        //     for ($j=0; $j < $products_count; $j++) { 
                
        //         $orders  = DB::table('customer_order')->where('product_id', $products[$j]->id)->where('customer_id', $clients[$i]->id)->get(); 

        //         if(!$orders->isEmpty()){

        //             $orders_count  = DB::table('customer_order')->where('product_id', $products[$j]->id)->where('customer_id', $clients[$i]->id)->count();                  
        //             for ($k=0; $k < $orders_count; $k++) { 
        //                 $quantity = $quantity + $orders[$k]->quantity;
        //             }
        //         }else{
        //             $quantity = 0;
        //         }

        //         $clients[$i]->name;
        //         $products[$j]->product_name." ".$products[$j]->product_type;
               
        //         $product_quantity[$j] = $quantity;


        //         $purchased_leads = array(
        //             "product_name_type" => $products[$j]->product_name.' '.$products[$j]->product_type,
        //             "quantity" => $product_quantity[$j]
        //         );

        //         $products_array[$i][] = $purchased_leads;
               
        //     }
        //     $quantity = 0;
        //     $users['users'][] = ['name' => $clients[$i]->name, 'products' => $products_array[$i]];
        //     echo "<br><br>";
        // }

        // return view('home')->with('data', $users);

        // with join






    if(Auth::user()->isAdmin == 1){
        $customer  = DB::table('users')->where('isAdmin', 2)->orderBy('user_id','DESC')->get();
           $customer_count  = DB::table('users')->where('isAdmin', 2)->count();
           if(!$customer->isEmpty())   {
               foreach ($customer as $key => $value) {
                     $bronze_lead =  DB::table('customer_order')
                                     ->join('products', 'customer_order.product_id', '=', 'products.id')
                                     ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Bronze')->where('customer_order.lead_id', $value->user_id)
                                     ->count();
                        
                           $silver_lead =  DB::table('customer_order')
                                       ->join('products', 'customer_order.product_id', '=', 'products.id')
                                       ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Silver')->where('customer_order.lead_id', $value->user_id)
                                       ->count();
                           $gold_lead =  DB::table('customer_order')
                                     ->join('products', 'customer_order.product_id', '=', 'products.id')
                                     ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('products.product_name', '=', 'Gold')->where('customer_order.lead_id', $value->user_id)
                                     ->count();
                           $bronze_sales =  DB::table('customer_order')
                                       ->join('products', 'customer_order.product_id', '=', 'products.id')
                                       ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Bronze')->where('customer_order.lead_id', $value->user_id)
                                       ->count();
                            $silver_sales =  DB::table('customer_order')
                                        ->join('products', 'customer_order.product_id', '=', 'products.id')
                                        ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Silver')->where('customer_order.lead_id', $value->user_id)
                                        ->count();
                            $gold_sales =  DB::table('customer_order')
                                       ->join('products', 'customer_order.product_id', '=', 'products.id')
                                       ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('products.product_name', '=', 'Gold')->where('customer_order.lead_id', $value->user_id)
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
        // $lead_gen_requests = DB::table('customer_order')
        // ->join('products', 'customer_order.product_id', '=', 'products.id')
        // ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('customer_order.status', '=', 'Pending')->where(function ($query) {
        //         $query->where('users.isAdmin', '=', 3)
        //               ->orWhere('users.isAdmin', '=', 4);
        //     })
        //     ->get();
         $lead_gen_requests = DB::table('customer_order')
        ->join('products', 'customer_order.product_id', '=', 'products.id')
        ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('customer_order.status', '=', 'Pending')->get();
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
