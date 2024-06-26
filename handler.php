<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/styles2.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Order</title>
  </head>
  <body>
    
    <?php
    
    //initialize cost variable
    $cost = 0;
    
    //get size input from index
    $s = "";
    if ( isset( $_POST['s'] ) ){
      $s = strtolower($_POST['s']);
    }
    
    //get toppings input from index
    $t = 0;
    if (isset($_POST['t'])) {
      $t = $_POST['t'];
    }

    //determine the added cost for toppings (only if a valid size was inputted)
    if ($t == 0 && ($s == "large" || $s == "l" || $s == "xlarge" || $s == "xl")) {
      $cost = $cost + 0;
    }
    if ($t == 1 && ($s == "large" || $s == "l" || $s == "xlarge" || $s == "xl")) {
      $cost = $cost + 1;
    }
    if ($t == 2 && ($s == "large" || $s == "l" || $s == "xlarge" || $s == "xl")) {
      $cost = $cost + 1.75;
    }
    if ($t == 3 && ($s == "large" || $s == "l" || $s == "xlarge" || $s == "xl")) {
      $cost = $cost + 2.5;
    }
    if ($t == 4 && ($s == "large" || $s == "l" || $s == "xlarge" || $s == "xl")) {
      $cost = $cost + 3.35;
    }

    //determine the size and add the necessary cost; if invalid, output an error message
    if ($s == "large" || $s == "l") {
      $cost += 6;
    } elseif ($s == "xlarge" || $s == "xl") {
      $cost += 10;
    } else {
      echo "Error! Perhaps you mistyped the size? \n";
    }

    //create variables for the rounded subtotal, tax and total
    $roundcost = number_format($cost, 2);
    $tax = number_format($cost*0.13, 2);
    $total = number_format($cost+$tax, 2);

    //echo the subtotal, tax and total if a valid size was input
    if ($s == "large" || $s == "l" || $s == "xlarge" || $s == "xl") {
      echo "Your subtotal is $cost \n\n";
      echo "Your tax is $tax \n\n";
      echo "You total is $total \n\n";
    }
    ?>
    
  </body>
</html>
