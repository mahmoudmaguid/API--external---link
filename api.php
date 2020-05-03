<?php
  // Submit a request to the API endpoint.
  $productsJSONString = file_get_contents( 'https://thereportoftheweek-api.herokuapp.com/reports' );
  // Convert the response to a PHP object.
  $productsObject = json_decode( $productsJSONString );
  // Collect the first user in the results array.
  $products = $productsObject->results[0];
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
    <dt>product details</dt>
    <dd>
      <?php echo $products->product; ?>
      <?php echo $products->manufacturer; ?>
      <?php echo $products->category; ?>
      <?php echo $products->videoTitle; ?>
      <?php echo $products->videoCode; ?>
      <?php echo $products->dateReleased; ?>
      <?php echo $products->rating; ?>
    </dd>
  </dl>
</body>
</html>