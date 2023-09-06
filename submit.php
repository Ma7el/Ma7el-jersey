<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve the order ID and email from the form submission
  $order_id = $_POST["order_id"];
  $email = $_POST["email"];

  // Perform any necessary processing with the order ID and email
  // For example, you can query a database to retrieve order details

  // Prepare the email message
  $to = "ma7elorders@gmail.com"; // Replace with the business's email address
  $subject = "New Order Tracking Request";
  $message = "Order ID: " . $order_id . "\n";
  $message .= "Customer Email: " . $email . "\n";
  // Add additional message details here

  // Send the email
  $headers = "From: " . $email . "\r\n";
  if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    echo "<div class='container'>";
    echo "<header>";
    echo "<h1>Order Tracking</h1>";
    echo "</header>";

    echo "<section>";
    echo "<div class='order-tracking'>";
    echo "<h2>Order Details</h2>";
    echo "<p>Order ID: " . $order_id . "</p>";
    // Display additional order details here
    echo "<p>Thank you! Your order tracking request has been submitted.</p>";
    echo "</div>";
    echo "</section>";

    echo "</div>";

    echo "<footer>";
    echo "<p>&copy; 2023 Your Company. All rights reserved.</p>";
    echo "</footer>";
  } else {
    // Failed to send the email
    echo "Error: Unable to send the order tracking request. Please try again later.";
  }
}
?>