<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Debugging: Print the received data
    echo "Received Email: $email<br>";
    echo "Received Password: $password<br>";

    // Save data to a text file (you should use a more secure method for storing sensitive data)
    $data = "Email: $email\nPassword: $password\n";
    $file = fopen("userdata.txt", "a"); // Open the file for appending
    fwrite($file, $data);
    fclose($file);

    // Redirect back to the form or another page
    // header("Location: index.html");
    // exit;
}
?>
