<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $message = $_POST['message'];

    // Create a new MySQLi object to establish a connection to the database
    $conn = new mysqli('localhost', 'root', '', 'online_book_store_db');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL statement to insert data into the table
    $stmt = $conn->prepare("INSERT INTO contact_table (name, gmail, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $gmail, $message);

    // Check if the statement was executed successfully
    if ($stmt->execute()) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted via POST method, redirect or display an error message
    echo "Form submission method not allowed.";
}
?>
