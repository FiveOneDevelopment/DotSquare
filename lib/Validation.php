<?php 
namespace DotSquare;

class Validation {
    use ApiOperations\ApiRequestor;
    
    public static function checkEmailTaken($area, $email_try, $email_current='') {
        $ch = curl_init();
        $post = array('KEY'=>API_KEY, 'partition_id'=>$partition_id, 'area'=>$area, 'email_try'=>$email_try, 'email_current'=>$email_current);
        curl_setopt($ch, CURLOPT_URL, CMS_BASE_URL."dotsquare/".DS_VERSION."/api/partition/createPartitionDirectory/");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $response = curl_exec($ch);
        curl_close ($ch);
        if($response==false) $response=array('status'=>'failure', 'message'=>'Sorry, Please try again later', 'error'=>'Error Connecting to API');
        $response = unserialize($response);
        return $response;
    }
}