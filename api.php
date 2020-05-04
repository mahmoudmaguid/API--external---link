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
        <h2>PRODUCT</h2>
      <h3><?php echo $products->product; ?></h3>
      <h2>MANUFACTURER</h2>
      <h3><?php echo $products->manufacturer; ?></h3>
      <h2>CATEGORY </h2>
      <h3><?php echo $products->category; ?></h3>
      <h2> VIDEOTITLE</h2>
      <h3><?php echo $products->videoTitle; ?></h3>
      <h2>VIDEO CODE</h2>
      <h3><?php echo $products->videoCode; ?></h3>
      <h2>DATE RELEASED</h2>
      <h3><?php echo $products->dateReleased; ?></h3>
      <h2>RATING</h2>
      <h3> <?php echo $products->rating; ?></h3>
    </dd>
  </dl>
</body>
</html>