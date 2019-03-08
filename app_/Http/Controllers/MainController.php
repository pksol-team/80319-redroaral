<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Users;
use App\Order;
class MainController extends Controller
{
    public function business_index(){
        if(Auth::user()->isAdmin == 1){
            $business_users  = DB::table('users')->where('isAdmin', 3)->orderBy('user_id','DESC')->get();
            $business_users_count  = DB::table('users')->where('isAdmin', 3)->count();
            $users = [];
            if($business_users){
                for ($i=0; $i < $business_users_count; $i++) { 
                        $pending_lead =  DB::table('customer_order')
                                    ->join('products', 'customer_order.product_id', '=', 'products.id')
                                    ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('customer_order.status', 'Pending')->where('customer_order.customer_id', $business_users[$i]->user_id)
                                    ->count();
                        $completed_lead =  DB::table('customer_order')
                                    ->join('products', 'customer_order.product_id', '=', 'products.id')
                                    ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Lead')->where('customer_order.status', 'Completed')->where('customer_order.customer_id', $business_users[$i]->user_id)
                                    ->count();
                        $pending_sales =  DB::table('customer_order')
                                    ->join('products', 'customer_order.product_id', '=', 'products.id')
                                    ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('customer_order.status', 'Pending')->where('customer_order.customer_id', $business_users[$i]->user_id)
                                    ->count();
                        $completed_sales =  DB::table('customer_order')
                                    ->join('products', 'customer_order.product_id', '=', 'products.id')
                                    ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('products.product_type', '=', 'Sales')->where('customer_order.status', 'Completed')->where('customer_order.customer_id', $business_users[$i]->user_id)
                                    ->count();
                        $users['request'][] = [
                            'user_id' => $business_users[$i]->user_id,
                            'user' =>   $business_users[$i]->name,
                            'pending_lead' => $pending_lead,
                            'completed_lead' => $completed_lead,
                            'pending_sales' => $pending_sales,
                            'completed_sales' => $completed_sales                    
                        ];
                }
            	return view('pages/business')->with('data',$users);            
            }
            else{
                return view('pages/business')->with('data','');            

            }
        }
        else{
            return redirect("/page_404");
        }
    }
                
                    public function businesslist_index($request){


        if(Auth::user()->isAdmin == 2){
            if($request == 'pending'){
            $order = Order::with('products')->with('users')->where('lead_id', Auth::user()->user_id)->where('status', 'Pending')->orderBy('order_id','DESC')->get();
            $orders = json_decode($order);
            return view('pages/business_list', ['request_data' => $orders, 'data' => 'Pending Request']);
        }else{
            $order = Order::with('products')->with('users')->where('status', 'Completed')->where('lead_id', Auth::user()->user_id)->orderBy('order_id','DESC')->get();
            $orders = json_decode($order);
            
            return view('pages/business_list', ['request_data' => $orders, 'data' => 'Completed Request']);
        }
        }
        else{

            if($request == 'pending'){
                $order = Order::with('products')->with('users')->where('status', 'Pending')->where('customer_id', Auth::user()->user_id)->orderBy('order_id','DESC')->get();
                $orders = json_decode($order);
                
                return view('pages/business_list', ['request_data' => $orders, 'data' => 'Pending Request']);
            }else{
                $order = Order::with('products')->with('users')->where('status', 'Completed')->where('customer_id', Auth::user()->user_id)->orderBy('order_id','DESC')->get();
                $orders = json_decode($order);
                
                return view('pages/business_list', ['request_data' => $orders, 'data' => 'Completed Request']);
            }
        }



        // if($request == 'pending'){
      //       $requests = DB::table('customer_order')->where('status', 'Pending')->orderBy('id','DESC')->get();           
      //       return view('pages/business_list', ['request_data' => $requests,
      //           'data' => 'Pending Request']);

        // }else {
      //       $requests = DB::table('customer_order')->where('status', 'Completed')->orderBy('id','DESC')->get();      
            // return view('pages/business_list', ['request_data' => $requests,
      //           'data' => 'Completed Request']);
        // }
    }
    public function activerequest_index(){
        if (Auth::user()->isAdmin == 1) {
            
            $active_request = Order::with('products')->where('lead_id', '<>', 0)->where('status', 'Pending')->orWhere('payment_status', 'Awaiting Payment')->with('users')->orderBy('order_id','DESC')->get();

            // $active_request = Order::with('products')->with('users')->where('payment_status', 'Awaiting Payment')->where(function ($query) {
            //     $query->where('status', '=', 'Pending')
            //           ->orWhere('status', '=', 'Active');
            // })->orderBy('order_id','DESC')->get();


            $active_requests = json_decode($active_request);
        	return view('pages/active_request')->with('data', $active_requests);
        }else{
            return redirect('/page_404');
        }
    }
    public function purchaseform_index(){
        if(Auth::user()->isAdmin != 2){
    	   return view('pages/purchase_form');            
        }else{
            return redirect("/page_404");
        }
    }
    public function recurringform_index(){
        if(Auth::user()->isAdmin != 2){
    	   return view('pages/recurring_form');            
        }else{
            return redirect("/page_404");
        }
    }
    // public function genaccounts_index(){
    //     if(Auth::user()->isAdmin == 1){

    // 	   return view('pages/gen_accounts');
    //     }else{
    //         return redirect("/page_404");
    //     }
    // }
    public function genusers_index($request){
        if(Auth::user()->isAdmin == 1){
            $lead_gen_users = DB::table('users')->where('isAdmin', 2)->orderBy('user_id','DESC')->get();
            if($request == 'users'){
        	   return view('pages/gen_users')->with('data', $lead_gen_users);
            }else{
               return view('pages/gen_accounts')->with('data', $lead_gen_users);
            }
        }else{
            return redirect("/page_404");
        }
    }
    public function creaetuser_index(){
        if(Auth::user()->isAdmin == 1){
            return view('pages/create_lead_generator');
        }else{
            return redirect("/page_404");
        }
    }
    public function businessusers_index($request){
        if(Auth::user()->isAdmin == 1){
            if($request == 'business'){
                $lead_gen_users = DB::table('users')->where('isAdmin', 3)->orderBy('user_id','DESC')->get();      
                $isAdmin = 3;      
            }else if($request == 'normal'){
                $lead_gen_users = DB::table('users')->where('isAdmin', 4)->orderBy('user_id','DESC')->get();
                $isAdmin = 4;      
            }
        	return view('pages/business_users', ['check_customer' => $isAdmin,
                    'data' => $lead_gen_users]);
        }else{
            return redirect("/page_404");
        }
    }

    public function addcustomer_index($request){  
        if(Auth::user()->isAdmin == 1){      
            return view('pages/create_customer')->with('check_customer', $request);
        }else{
            return redirect("/page_404");
        }
    }


    
    public function leadsubmission_index(){
    	return view('pages/lead_submission');
    }

    public function addcustomerorder_index(Request $request){

        // Storage::disk('uploads')->put($request->file, $request->file);

        // var_dump($request->exclude_vat);


        // if (Auth::user()->isAdmin == 3 || Auth::user()->isAdmin == 4 ){
        //     $exclude_vat = 0;
        //     $include_vat = 0;
        // }else{
        //     $exclude_vat = $request->exclude_vat;
        //     $include_vat = $request->include_vat;
        // }



        DB::table('customer_order')->insert([
            'product_id' => $request->product_id, 
            'customer_id' => Auth::user()->user_id,
            'quantity' => $request->quantity,
            'exclude_vat' => $request->exclude_vat,
            'include_vat' => $request->include_vat,
            'purchased_date' => $request->purchased_date,
            'comment' => $request->comment,
            'auto_add_row' => $request->auto_add_row,
            'current_date_' => date('Y-m-d'),
            'form_status' => 'Active'

        ]);


        if(Auth::user()->isAdmin == 1){
         return redirect('/activerequest');

        }else{
            return redirect('/business_list/pending');
        }

    }

    public function getdata_index(Request $request){

        $get_data = DB::table('products')->where('product_name', $request->product_name)->where('product_type', $request->product_type)->first();
        
        $get_vat = DB::table('product_vat')->where('id', 1)->first();

        $array = [$get_data, $get_vat];

        echo json_encode($array);

        // echo json_encode($get_vat);

    }

    

    public function configuration_index(){  

        $get_products = DB::table('products')->get();

        $get_vat = DB::table('product_vat')->where('id', 1)->first();


        return view('pages/configuration', ['data' => $get_products, 'vat' => $get_vat]);
    }

    public function pagenotfound_index(){        
        return view('pages/page_not_found');
    }
    public function updatestatus_update(Request $request){        
       
       DB::table('customer_order')->where('order_id', $request->order_id)->update( [ 'request_status' => $request->active ]);
       echo "Done";
    }


    public function editrequest_edit($request){  
    $get_data = Order::with('products')->with('users')->where('order_id', $request)->first();

      // $get_data = DB::table('customer_order')->where('order_id', $request)->first();
      return view("pages/edit_request")->with('data', $get_data);
    }

    public function updatecustomerorder_update(Request $request){        
       // echo $request->order_id;
       // echo $request->purchased_date;
       // echo $request->product_id;
       // echo $request->quantity;
       // echo $request->item_cost;
       // echo $request->order_id;

       DB::table('customer_order')->where('order_id', $request->order_id)->update( [ 'status' => $request->status, 'payment_status' => $request->payment_status ]);

       return redirect("/activerequest");
       // echo "Done";
    }

    public function products_index(){ 
       $products = DB::table('products')->get();

      return view("pages/products")->with('data', $products);
    }
    

    public function editproduct_edit($request){

        // echo $request;
       $product = DB::table('products')->where('id', $request)->first();

      return view("pages/edit_product")->with('data', $product);
    }

    // public function product_update(Request $request){

    //    DB::table('products')->where('id', $request->id)->update( [ 'vat' => $request->vat, 'price' => $request->price ]);

    //    return redirect("/products");
    //    // echo "Done";
    // }
    
    public function submitrequest_index($request){

        if($request == 0){

        $lead_gen_requests = DB::table('customer_order')
        ->join('products', 'customer_order.product_id', '=', 'products.id')
        ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('customer_order.status', '=', 'Pending')->where('customer_order.lead_id', '=', 0)->get();

        return view('pages/submit_request', ['data' => $lead_gen_requests, 'value' => '']);

       // return view("pages/submit_request")->with('data', $lead_gen_requests);
        }
        else
        {
            $selected_order = DB::table('customer_order')
            ->join('products', 'customer_order.product_id', '=', 'products.id')
            ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('customer_order.order_id', '=', $request)->first();

             return view('pages/submit_request', ['data' => $selected_order, 'value' => 'plus']);
       // return view("pages/submit_request")->with('data', $selected_order);

        }

    }


    public function getorderdata_show(Request $request){

        // echo $request->order_id;
        $selected_order = DB::table('customer_order')
        ->join('products', 'customer_order.product_id', '=', 'products.id')
        ->join('users', 'customer_order.customer_id', '=', 'users.user_id')->where('customer_order.order_id', '=', $request->order_id)->first();
        

        echo json_encode($selected_order);


       // return view("pages/submit_request")->with('data', $selected_order);
    }


     public function orderlead_update(Request $request){        
       // echo $request->order_id;
       // DB::table('customer_order')->where('order_id', $request->order_id)->update( [ 'exclude_vat' => $request->exclude_vat, 'include_vat' => $request->include_vat,'request_status' => 'Active', 'lead_id' => Auth::user()->user_id  ]);
       DB::table('customer_order')->where('order_id', $request->order_id)->update( [ 'request_status' => 'Active', 'lead_id' => Auth::user()->user_id  ]);

       return redirect("/");
       // echo "Done";
    }

     public function product_update(Request $request){        
       
        if($request->table == 'product_vat'){
            DB::table('product_vat')->where('id', $request->id)->update( [ 'vat' => $request->value]);
        }else{
            DB::table('products')->where('id', $request->id)->update( [ 'product_type' => $request->type, 'product_name' => $request->name, 'price' => $request->cost]);

        }
    }

    public function customerallleads_index($request, $id){

        if($request == 'pending'){
            $order = Order::with('products')->with('users')->where('status', 'Pending')->where('customer_id', $id)->orderBy('order_id','DESC')->get();
            $orders = json_decode($order);
            
            

            return view('pages/business_list', ['request_data' => $orders, 'data' => 'Pending Request', 'user_id' => $id]);
        }else{
            $order = Order::with('products')->with('users')->where('status', 'Completed')->where('customer_id', $id)->orderBy('order_id','DESC')->get();
            $orders = json_decode($order);
            
            return view('pages/business_list', ['request_data' => $orders, 'data' => 'Completed Request', 'user_id' => $id]);
        }
        

    }
    public function leadallrequest_index($request, $id){

        if($request == 'pending'){
            $order = Order::with('products')->with('users')->where('status', 'Pending')->where('lead_id', $id)->orderBy('order_id','DESC')->get();
            $orders = json_decode($order);
            
            return view('pages/business_list', ['request_data' => $orders, 'data' => 'Pending Request', 'user_id' => $id, 'user' => 'lead']);
        }else{
            $order = Order::with('products')->with('users')->where('status', 'Completed')->where('lead_id', $id)->orderBy('order_id','DESC')->get();
            $orders = json_decode($order);
            
            return view('pages/business_list', ['request_data' => $orders, 'data' => 'Completed Request', 'user_id' => $id, 'user' => 'lead']);
        }
        

    }


     public function submittedleads_index(){

            $order = Order::with('products')->with('users')->where('lead_id', Auth::user()->user_id)->orderBy('order_id','DESC')->get();
            $orders = json_decode($order);
            
            return view('pages/all_leads')->with('data', $orders);       
            

    }

      public function viewrequest_show($id){

            $order = Order::with('products')->with('users')->where('order_id', $id)->first();
            $orders = json_decode($order);
            
            return view('pages/view_request')->with('data', $orders);       
            

    }

    public function edituser($id){

       $user = DB::table('users')->where('user_id', $id)->first();

        return view('pages/edit_user')->with('data', $user);       
            

    }

    public function check_date(Request $request){

        if($request->method() == 'POST'){

            if($request->Auth == 'true'){

                $orders = DB::table('customer_order')->get();

                foreach ($orders as $data) {
                     $product_id = $data->product_id;
                     $customer_id = $data->customer_id;
                     $quantity = $data->quantity;
                     $exclude_vat = $data->exclude_vat;
                     $include_vat = $data->include_vat;
                     $purchased_date = date('Y-m-d');
                     $comment = $data->comment;
                    if($data->form_status == 'Active'){ 
                        if($data->auto_add_row == 'Weekly'){

                             $submitted_date = date_create($data->current_date_);
                             $current_date = date_create(date('Y-m-d'));

                             $date_difference = date_diff($submitted_date ,$current_date);
                             $difference =  $date_difference->format("%a");
                             if($difference == 7){
                                 DB::table('customer_order')->insert([
                                     'product_id' => $product_id, 
                                     'customer_id' => $customer_id,
                                     'quantity' => $quantity,
                                     'exclude_vat' => $exclude_vat,
                                     'include_vat' => $include_vat,
                                     'purchased_date' => $purchased_date,
                                     'comment' => $comment,
                                     'current_date_' => date('Y-m-d'),
                                     'form_status' => 'Active',
                                     'auto_add_row' => 'Weekly'
                                 ]);
                                 DB::table('customer_order')->where('order_id', $data->order_id)->update( [ 'form_status' => 'Resubmitted' ]);
                             }
                        }
                        else if($data->auto_add_row == 'Every Two Weeks'){

                             $submitted_date = date_create($data->current_date_);
                             $current_date = date_create(date('Y-m-d'));

                             $date_difference = date_diff($submitted_date ,$current_date);
                             $difference =  $date_difference->format("%a");
                             if($difference == 14){
                                 DB::table('customer_order')->insert([
                                     'product_id' => $product_id, 
                                     'customer_id' => $customer_id,
                                     'quantity' => $quantity,
                                     'exclude_vat' => $exclude_vat,
                                     'include_vat' => $include_vat,
                                     'purchased_date' => $purchased_date,
                                     'comment' => $comment,
                                     'current_date_' => date('Y-m-d'),
                                     'form_status' => 'Active',
                                     'auto_add_row' => 'Every Two Weeks'
                                 ]);
                                 DB::table('customer_order')->where('order_id', $data->order_id)->update( [ 'form_status' => 'Resubmitted' ]);
                             }
                        }
                        else  if($data->auto_add_row == 'Monthly'){

                             $submitted_date = date_create($data->current_date_);
                             $current_date = date_create(date('Y-m-d'));

                             $date_difference = date_diff($submitted_date ,$current_date);
                             $difference =  $date_difference->format("%a");
                             if($difference == 30){
                                 DB::table('customer_order')->insert([
                                     'product_id' => $product_id, 
                                     'customer_id' => $customer_id,
                                     'quantity' => $quantity,
                                     'exclude_vat' => $exclude_vat,
                                     'include_vat' => $include_vat,
                                     'purchased_date' => $purchased_date,
                                     'comment' => $comment,
                                     'current_date_' => date('Y-m-d'),
                                     'form_status' => 'Active',
                                     'auto_add_row' => 'Monthly'
                                 ]);
                                 DB::table('customer_order')->where('order_id', $data->order_id)->update( [ 'form_status' => 'Resubmitted' ]);
                             }
                        }
                    }
                } 
            }
            else{
                return redirect('/page_404');
            }
        }
        else{
            return redirect('/page_404');                                 
        }     
    }
    

    


    
    
    
    
    


    
    

}
