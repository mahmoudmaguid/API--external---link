<?php
  // Submit a request to the API endpoint.
  $productsJSONString = file_get_contents( 'https://thereportoftheweek-api.herokuapp.com/reports' );
  // Convert the response to a PHP object.
  $productsObject = json_decode( $productsJSONString );
  // Collect the first user in the results array.
  $products = $productsObject[0];
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <h1>External API PHP Test</h1>
  <?php include './includes/navigation.php'; ?>
  <h2>products review</h2>
  <dl>
    <dt><h2>product details</h2></dt>
    <dd>
      <h2><?php echo $products->product; ?></h2>
      
      <h2><?php echo $products->manufacturer; ?></h2>
      <h2><?php echo $products->category; ?></h2>
      <h2><?php echo $products->videoTitle; ?></h2>
      <h2><?php echo $products->videoCode; ?></h2>
      <h2><?php echo $products->dateReleased; ?></h2>
     <h2> <?php echo $products->rating; ?></h2>
    </dd>
  </dl>
</body>
</html>