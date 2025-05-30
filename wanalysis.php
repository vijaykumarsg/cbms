 <?php
include 'dbconfig.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$start_date = $_POST['start_date'] ?? null;
$end_date = $_POST['end_date'] ?? null;

if (!$start_date || !$end_date) {
    die("Both start date and end date are required.");
}

if ($start_date > $end_date) {
    die("End date must be equal to or after the start date.");
}

$sql = "SELECT COUNT(*) AS total_orders
        FROM book1
        WHERE status='approved' AND order_date BETWEEN ? AND ? ";

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
 echo "Total number of orders from $start_date to $end_date: $total_orders";
$stmt->close();
$conn->close();
?>