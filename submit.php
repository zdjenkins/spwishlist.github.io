<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the user inputs from the form
  $customer_name = $_POST['customer_name'];
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];

  // Validate the inputs (optional)

  // Add the user inputs to the wishlist
  $wishlist_file = fopen('wishlist.txt', 'a');
  fwrite($wishlist_file, "$customer_name\t$product_name\t$price\n");
  fclose($wishlist_file);
}
?>
