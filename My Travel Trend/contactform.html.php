<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="index.php">
  <title>Contact Form</title>
</head>
<style>
  body{
    background-color: aqua ;
  }
</style>
<body>
  <h1>Contact Us</h1>
  <form action="send_email.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>
    <br>

    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "your-email@example.com"; // Replace this with your desired email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
      echo "Thank you for your message, $name! We'll get back to you soon.";
    } else {
      echo "Oops! Something went wrong. Please try again later.";
    }
  }
  ?>


</body>

</html>