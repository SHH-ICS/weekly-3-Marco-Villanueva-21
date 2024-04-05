<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Order</title>
  </head>
  <body>
    
    <?php
    $s = "";
    if ( isset( $_POST['s'] ) ){
      $s = strtolower($_POST['s']);
    }

    $t = "";
    if (isset($_POST['t'])) {
      $t = $_POST['t'];
    }

    $cost = 0;
    echo "$t";
    if ($s == "Large" or $s == "L") {
      $cost = 6;
      echo "$cost";
    }
    if ($s =="XLarge" or $s == "XL") {
      $cost = 10;
      echo "$cost";
    }
    elseif ($s != "Large" or $s != "L" or $s != "XLarge" or $s != "XL") {
      echo "Error! Perhaps you mistyped the size?";
    }

    if ($t == 0) {
      $cost = $cost + 0;
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

    $tax = $cost*0.13;
    $total = $cost+$tax;
    echo "Your subtotal is $$cost \n\n";
    echo "Your tax is $$tax \n\n";
    echo "You total is $$total \n\n";
    ?>
    
  </body>
</html>
