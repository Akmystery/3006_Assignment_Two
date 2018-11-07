<?php
  $num_apple  = (int)$_POST["appleTextBox"];
  $num_orange = (int)$_POST["orangeTextBox"];
  $num_banana = (int)$_POST["bananaTextBox"];
  $user_name  =  $_POST["nameTextBox"];
  $payment_method = $payment = strtoupper($_POST["payment_method"]);
  //if discover radio button is checked, set the payment method to the one user enters inside discover Textbox
  if($payment == "DISCOVER"){
    $payment_method = strtoupper($_POST["discoverTextBox"]);
  }

  //Make sure that number of apples, oranges and bananas are not null
  if(isset($num_apple) && isset($num_orange) && isset($num_banana)){
    $order_record = readFromFile();
    $order_record["apples"] += $num_apple;
    $order_record["oranges"] += $num_orange;
    $order_record["bananas"] += $num_banana;
    writeToFile($order_record);

    //calculate the total cost by multiplying the number of fruits with individual price
    $total_cost = number_format((($num_apple * 0.69) + ($num_orange * 0.59) + ($num_banana * 0.39)), 2);

    //Redirect to receipt.php
    header("Location: receipt.php?" .
        "name=$user_name&" .
        "apples=$num_apple&" .
        "oranges=$num_orange&" .
        "bananas=$num_banana&" .
        "payment=$payment_method&" .
        "total=$total_cost");
  }else{
    exit;
  }

//Read from order.txt file
function readFromFile(){
  $order_file = fopen("order.txt","r+") or exit("Unable to open file");
  $order_record = array("apples" => 0, "oranges" => 0, "bananas" => 0);

  //Get the number of fruits from order.txt and assign it the array
  foreach ($order_record as $fruit => $quantity)
  {
    $line = fgets($order_file);
    $quantity = explode(":", $line); //split the string into array
    $order_record[$fruit] = (int)$quantity[1];
  }
  fclose($order_file);
  return $order_record;
}

//Write new number of fruit to the order.txt file
function writeToFile($record)
{
    $order_file = fopen("order.txt", "w+");
    foreach ($record as $fruit => $quantity){
      fwrite($order_file, "Total number of " .$fruit. " : " .$quantity. "\r\n");
    }
    fclose($file);
}
?>
