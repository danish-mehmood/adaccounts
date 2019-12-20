<?php
namespace App\FacebookApi;

class FacebookApiCalls{

    private $access_token="EAAGaTYfPjj0BACgSABEPJxAX7WEsfp66iXLofSj60IjZBrUBoCJI0ulPED8bqji8RGbnI1rKIeTwU0kgwZAZAIjvVm2modPTyBrvAImXIz40ZBhQ5SdUxaZAmUrCyoePjWHS2NsHnyxNKYcSF6ev7IgmFnlj8oefVPC92BMsy1P54R9RpT4x1u124S7jDUJgZD";
    private $user_id = "1638510629730912";
    public function GetAllAccounts(){

        $curl = curl_init();
        // $url ="https://graph.facebook.com/v5.0/$this->user_id/adaccounts?fields=name,account_id,account_status,amount_spent/?access_token=$this->access_token";
        // $url ="https://graph.facebook.com/v4.0/$this->user_id/adaccounts/?access_token=$this->access_token";
        $url ="https://graph.facebook.com/v5.0/$this->user_id/adaccounts/?fields=name,account_status,account_id,amount_spent&access_token=$this->access_token";
        // $url=$link;
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_RETURNTRANSFER , 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        $json = json_decode($result , true );
        curl_close($curl);

        return $json;


      
    }

    public function Paginate($url){
       $curl = curl_init();
       $link = $url ;
       curl_setopt($curl , CURLOPT_URL , $link);
       curl_setopt($curl , CURLOPT_RETURNTRANSFER , 1);
       curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
       curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
       $result = curl_exec($curl);
       $json = json_decode($result , true );
       curl_close($curl);

       return $json;
       


    }
}
?>