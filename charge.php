<?php 
require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');


\Stripe\Stripe::setApiKey('sk_test_51IfUjKSG96o3oLUDVgsZvm8uWs4aNPIt1hAapyp2GRwduEJaUcRxDCGHQVp83b1PRHM4PlXs8K4pCHCe8akQShRc00FA0WUAQr');

$_POST=filter_var_array($_POST,FILTER_SANITIZE_STRING);
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$token=$_POST['stripeToken'];

//creating customer in stripe
$customer= \Stripe\Customer::create(array(

"email" => $email, 
"source"=> $token
 
));
//charge the customer  
$charge=\Stripe\Charge::create(array(
    "amount"=>5000,
    "currency"=>"INR",
    "description"=> "payment",
    "customer"=> $customer->id
));
$customerData=[
    'id'=>$charge->customer,
    'first_name'=>$first_name,
    'last_name'=>$last_name,
    'email'=>$email
];
$customer=new Customer();
$customer->addCustomer($customerData);

//redirect to success 
header('Location:success.php?tid='.$charge->id.'&product='.$charge->description);

?>