<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Toppings</title>
  </head>
  <body>
    
    <?php
    $s = "";
    if ( isset( $_POST['s'] ) ){
      $s = $_POST['s'];
    }

    $cost = 0;
    if ($s == "Large") {
      $cost = 6;
      echo "$cost";
    }
    if ($s =="XLarge") {
      $cost = 10;
      echo "$cost";
    }
    if ($s !== "Large" or $s !== "XLarge") {
      echo "Error!";
    }

    if ($t == 1) {
      $cost = $cost + 1;
    }
    if ($t == 2) {
      $cost = $cost + 1.75;
    }
    if ($t == 3) {
      $cost = $cost + 2.5;
    }
    if ($t == 4) {
      $cost = $cost + 3.35;
    }       
    else {
      echo "Toppings error!";
    }
    $tax = $cost*0.13;
    $total = $cost+$tax;
    echo "Your subtotal is $cost";
    echo "Your tax is $tax";
    echo "You total is $total";
    ?>
    
  </body>
</html>
