 <?php
include 'dbconfig.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$month = $_POST['month'] ?? null;
$year = $_POST['year'] ?? null;

 if (!$month || !$year) {
    die("Both month and year are required.");
}


// Define the start and end date for the month
$start_date = "$year-$month-01";
$end_date = date("Y-m-t", strtotime($start_date));

// Prepare SQL query
$sql = "SELECT COUNT(*) AS total_orders
        FROM book1
        WHERE status='approved' AND order_date BETWEEN ? AND ?";

// Prepare and bind
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Failed to prepare the SQL statement: " . $conn->error);
}
$stmt->bind_param('ss', $start_date, $end_date);
$stmt->execute();
$result = $stmt->get_result();

if ($result === false) {
    die("Failed to execute the query: " . $stmt->error);
}
$row = $result->fetch_assoc();
$total_orders = $row['total_orders'];

// Output the result
echo "Total number of orders for $month/$year: $total_orders";

$stmt->close();
$conn->close();
?>