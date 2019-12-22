<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FacebookApi\FacebookApiCalls;

class facebookAdsController extends Controller
{
    //

    public function index(FacebookApiCalls $fb){
        // $access_token="EAAGaTYfPjj0BACgSABEPJxAX7WEsfp66iXLofSj60IjZBrUBoCJI0ulPED8bqji8RGbnI1rKIeTwU0kgwZAZAIjvVm2modPTyBrvAImXIz40ZBhQ5SdUxaZAmUrCyoePjWHS2NsHnyxNKYcSF6ev7IgmFnlj8oefVPC92BMsy1P54R9RpT4x1u124S7jDUJgZD";
        // $user_id = "1638510629730912";
        // $url="https://graph.facebook.com/v5.0/$user_id/adaccounts/?fields=name,account_status,account_id,amount_spent&access_token=$access_token";
        
        $account_id = array();
        $status =array();
        $spent_ammount =array();
        $account_name =array();
        $data = $fb->GetAllAccounts();
     
        
        // if(count($data['paging'])==3){
        //     $next_page =$data['paging']['next'];
        //     $prev_page =$data['paging']['previous'];
        // }
        // else{
        //     $next_page =$data['paging']['next'];
        //     $prev_page="";
        // }

        $has=array_keys($data["paging"]);
        
        if(in_array('next',$has)){
            $next_page=$data['paging']['next'];
        }
        else{
            $next_page="";
        }
        if(in_array('previous',$has)){
            $prev_page=$data['paging']['previous'];
        }
        else{
            $prev_page="";
        }
        // dd($prev_page);
            
        


        for($i=0 ; $i<count($data['data'])-1 ; $i++){
            $id =$data['data'][$i]['account_id'] ;
            $status_data=$data['data'][$i]['account_status'];
            $spent=$data['data'][$i]['amount_spent'];
            $name=$data['data'][$i]['name'];
            array_push($account_id , $id);
            array_push($status , $status_data);
            array_push($account_name , $name);
            array_push($spent_ammount, $spent);
           
        }

        return view("dashboard.basic-admin")->with(['spent'=>$spent_ammount ,'names'=>$account_name,
        'ids'=>$account_id,'status'=>$status,'next_link'=>$next_page,'prev_link'=>$prev_page]);



    
    }

    public function prev_paginator(Request $request ,FacebookApiCalls $fb){
        $data = $fb->Paginate($request->prev);
       
        $account_id = array();
          $status =array();
          $spent_ammount =array();
          $account_name =array();
        
          $has=array_keys($data["paging"]);
        //  dd($data); 
          if(in_array('next',$has)){
              $next_page=$data['paging']['next'];
          }
          else{
              $next_page="";
          }
          if(in_array('previous',$has)){
              $prev_page=$data['paging']['previous'];
          }
          else{
              $prev_page="";
          }
          
          for($i=0 ; $i<=count($data['data'])-1; $i++){
              $id =$data['data'][$i]['account_id'] ;
              $status_data=$data['data'][$i]['account_status'];
              $spent=$data['data'][$i]['amount_spent'];
              $name=$data['data'][$i]['name'];
              array_push($account_id , $id);
              array_push($status , $status_data);
              array_push($account_name , $name);
              array_push($spent_ammount, $spent);
             
          }
  
          return view("dashboard.basic-admin")->with(['spent'=>$spent_ammount ,'names'=>$account_name,
          'ids'=>$account_id,'status'=>$status,'next_link'=>$next_page,'prev_link'=>$prev_page]);
  
    
      }
    public function next_paginator(Request $request ,FacebookApiCalls $fb){
      $data = $fb->Paginate($request->next);
      
      $account_id = array();
        $status =array();
        $spent_ammount =array();
        $account_name =array();
      
        $has=array_keys($data["paging"]);
    //    dd($data); 
        if(in_array('next',$has)){
            $next_page=$data['paging']['next'];
        }
        else{
            $next_page="";
        }
        if(in_array('previous',$has)){
            $prev_page=$data['paging']['previous'];
        }
        else{
            $prev_page="";
        }
        
        for($i=0 ; $i<=count($data['data'])-1; $i++){
            $id =$data['data'][$i]['account_id'] ;
            $status_data=$data['data'][$i]['account_status'];
            $spent=$data['data'][$i]['amount_spent'];
            $name=$data['data'][$i]['name'];
            array_push($account_id , $id);
            array_push($status , $status_data);
            array_push($account_name , $name);
            array_push($spent_ammount, $spent);
           
        }

        return view("dashboard.basic-admin")->with(['spent'=>$spent_ammount ,'names'=>$account_name,
        'ids'=>$account_id,'status'=>$status,'next_link'=>$next_page,'prev_link'=>$prev_page]);

  
    }

    public function  filtered(Request $request , FacebookApiCalls $fb){
       
       $data =$fb->Date_filter($request->startDate, $request->endDate);
        $account_id = array();
        $status =array();
        $spent_ammount =array();
        $account_name =array();
        $next_page ="";
        $prev_page ="";

     
        $has=array_keys($data["paging"]);
        
        if(in_array('next',$has)){
            $next_page=$data['paging']['next'];
        }
        else{
            $next_page="";
        }
        if(in_array('previous',$has)){
            $prev_page=$data['paging']['previous'];
        }
        else{
            $prev_page="";
        }

      
        for($i=0; $i<=count($data['data'])-1 ; $i++){
            $id =$data['data'][$i]['account_id'] ;
            $status_data=$data['data'][$i]['account_status'];
            
            $name=$data['data'][$i]['name'];
            $has = array_keys($data['data'][$i]);
            if( in_array('insights',$has)){
                $spent=$data['data'][$i]['insights']['data'][0]['spend'];
                array_push($spent_ammount, $spent);
            }
            else{
                array_push($spent_ammount, "0");
            }
            array_push($account_id , $id);
            array_push($status , $status_data);
            array_push($account_name , $name);
            
         
            
           
        }

        // dd($spent_ammount);
    //   dd($data);
    //    return view("dashboard.date-filter");
        
           
   

    return view("dashboard.date-filter")->with(['spent'=>$spent_ammount ,'names'=>$account_name,
    'ids'=>$account_id,'status'=>$status,'next_link'=>$next_page,'prev_link'=>$prev_page ]);
    

}

public function next_date_paginator(Request $request , FacebookApiCalls $fb){

    $data = $fb->Paginate($request->next);
    $account_id = array();
      $status =array();
      $spent_ammount =array();
      $account_name =array();
    
      $has=array_keys($data["paging"]);
      
      if(in_array('next',$has)){
          $next_page=$data['paging']['next'];
      }
      else{
          $next_page="";
      }
      if(in_array('previous',$has)){
          $prev_page=$data['paging']['previous'];
          
      }
      else{
          $prev_page="";
      }
      
      for($i=0 ; $i<=count($data['data'])-1 ; $i++){
        $id =$data['data'][$i]['account_id'] ;
        $status_data=$data['data'][$i]['account_status'];
        
        $name=$data['data'][$i]['name'];
        $has = array_keys($data['data'][$i]);
        if( in_array('insights',$has)){
            $spent=$data['data'][$i]['insights']['data'][0]['spend'];
            array_push($spent_ammount, $spent);
        }
        else{
            array_push($spent_ammount, "0");
        }
        array_push($account_id , $id);
        array_push($status , $status_data);
        array_push($account_name , $name);
        
         
      }

      return view("dashboard.date-filter")->with(['spent'=>$spent_ammount ,'names'=>$account_name,
      'ids'=>$account_id,'status'=>$status,'next_link'=>$next_page,'prev_link'=>$prev_page]);
}


public function prev_date_paginator(Request $request , FacebookApiCalls $fb){

    $data = $fb->Paginate($request->prev);
    $account_id = array();
      $status =array();
      $spent_ammount =array();
      $account_name =array();
    
      $has=array_keys($data["paging"]);
      
      if(in_array('next',$has)){
          $next_page=$data['paging']['next'];
      }
      else{
          $next_page="";
      }
      if(in_array('previous',$has)){
          $prev_page=$data['paging']['previous'];
          
      }
      else{
          $prev_page="";
      }
      
      for($i=0 ; $i<=count($data['data'])-1 ; $i++){
        $id =$data['data'][$i]['account_id'] ;
        $status_data=$data['data'][$i]['account_status'];
        
        $name=$data['data'][$i]['name'];
        $has = array_keys($data['data'][$i]);
        if( in_array('insights',$has)){
            $spent=$data['data'][$i]['insights']['data'][0]['spend'];
            array_push($spent_ammount, $spent);
        }
        else{
            array_push($spent_ammount, "0");
        }
        array_push($account_id , $id);
        array_push($status , $status_data);
        array_push($account_name , $name);
        
         
      }

      return view("dashboard.date-filter")->with(['spent'=>$spent_ammount ,'names'=>$account_name,
      'ids'=>$account_id,'status'=>$status,'next_link'=>$next_page,'prev_link'=>$prev_page]);
}
}