 <?php
include 'dbconfig.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get today's date
$today = date("Y-m-d");

// Prepare SQL queries
$sql_total_orders = "SELECT COUNT(*) AS total_orders
                     FROM book1
                     WHERE status='approved' AND order_date = ?";

$sql_rejected_orders = "SELECT COUNT(*) AS rejected_orders
                        FROM book1
                        WHERE status='rejected' AND order_date = ?";

// Prepare and bind for total orders
$stmt_total = $conn->prepare($sql_total_orders);
if ($stmt_total === false) {
    die("Failed to prepare the SQL statement for total orders: " . $conn->error);
}
$stmt_total->bind_param('s', $today);
$stmt_total->execute();
$result_total = $stmt_total->get_result();

if ($result_total === false) {
    die("Failed to execute the query for total orders: " . $stmt_total->error);
}
$row_total = $result_total->fetch_assoc();
$total_orders = $row_total['total_orders'];

// Prepare and bind for rejected orders
$stmt_rejected = $conn->prepare($sql_rejected_orders);
if ($stmt_rejected === false) {
    die("Failed to prepare the SQL statement for rejected orders: " . $conn->error);
}
$stmt_rejected->bind_param('s', $today);
$stmt_rejected->execute();
$result_rejected = $stmt_rejected->get_result();

if ($result_rejected === false) {
    die("Failed to execute the query for rejected orders: " . $stmt_rejected->error);
}
$row_rejected = $result_rejected->fetch_assoc();
$rejected_orders = $row_rejected['rejected_orders'];

// Output the results
echo "Total number of approved orders for today ($today): $total_orders<br>";
echo "Total number of rejected orders for today ($today): $rejected_orders";

$stmt_total->close();
$stmt_rejected->close();
$conn->close();
?>