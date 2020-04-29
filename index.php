<?php
  // Basic assignment.
  $myMessage = 'My First PHP!';
  # This is also a comment!
  /*
    Multi-line
        comments

      yay!
   */

  /**
   * Data-Types.
   */
  // String.
  $myString = 'Hello, World!';
  // Integer.
  $myInteger = 34;
  // Float / Double.
  $myFloat = 3.14;
  // Boolean.
  $myBoolTrue = TRUE;
  $myBoolFalse = false;
  // Null.
  $myNull = NULL;
  // Object.
  $myObject = new stdClass();
  // Array.
  $myArray = [ 'First Item', 2, 'third item' ];
  $myOtherArray = array(
    $myString,
    $myInteger,
    $myFloat,
    $myBoolTrue,
    $myBoolFalse,
    $myNull,
    $myObject,
    $myArray
  );
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $myMessage; // Echo is used for outputting strings. ?></title>
</head>
<body>
  <h1><?php echo $myMessage; ?></h1>
  <pre>
    <?php
      // Var dump is great for seeing what's inside!
      var_dump( $myOtherArray );
    ?>
  </pre>
</body>
</html>