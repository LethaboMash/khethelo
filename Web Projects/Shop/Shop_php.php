<?php
// Database configuration
$host = 'localhost';      // Database host
$username = 'root';       // Database username
$password = 'Khethelo@01';   // Database password
$database = 'portfolio'; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully using MySQLi<br>";

// Example query
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result === false) {
    // Handle query error
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Product Name: " . htmlspecialchars($row["product_name"]) . " - Price: " . htmlspecialchars($row["product_price"]) . "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>