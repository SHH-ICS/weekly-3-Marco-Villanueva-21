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
    if ($s == "Large");
      echo "$s";
    if ($s !== "Large");
      echo "whut duh";
    ?>
    
  </body>
</html>
