<?php
//solidtrustpay url; 
$urladdress = "https://solidtrustpay.com/accapi/process.php"; 

//solidtrustpay api id
$api_id     = 'xxxxxxxxxxxxxx'; 

//solidtrustpay api password; 
$api_pwd    = md5($api_pwd.'s+E_a*');

//solidtrustpay username
$user       = "xxxxxxxxxxx";
$testmode   = "1";
$amount     = "10";
$currency   = "USD";
$comments   = "";
$fee        = 0;
$udf1       = "";
$udf2       = "";

$data = "user=".$user. "&testmode=".$testmode."&api_id=".$api_id. "&api_pwd=".$api_pwd. "&amount=".$amount."&paycurrency=".$currency."&comments=".$comments."&fee=".$fee."&udf1=".$udf1."&udf2=".$udf2;
// Call STP API

$ch = curl_init(); curl_setopt($ch, CURLOPT_URL,"$urladdress"); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HEADER, 0); //use this to suppress output 
$headers= array('Accept: application/json','application/x-www-form-urlencoded'); 
curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);

$result = curl_exec ($ch) or die(curl_error($ch));   
    
echo $result;

?>