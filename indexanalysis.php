<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="style1.css">
     
 
          <link rel="stylesheet" href="userstyle.css">

<style>
    body{
        background-color:white;
    }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}


li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color:#f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
 
  #customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #6A5A6D;
  color: white;
  text-align:center;
  
}
td{
    text-align: center;
}
.action-buttons a {
            margin: 0 5px;
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            border-radius: 3px;
            display: inline-block;
        }
        .action-buttons .edit {
            background-color: #4CAF50;
        }
        .action-buttons .delete {
            background-color: #f44336;
        }
        .action-buttons .edit:hover {
            background-color: #45a049;
        }
        .action-buttons .delete:hover {
            background-color: #da190b;
        }

body{
        background-color:#fafad2;

}
h2{
    font-family:serif;

}
h1{
    text-align: center;
    background-color:#00008B;
    color: #FFF0F5;
    height:45px;
    font-size:35px;
    font-family:serif;
}

#action-buttons input[type=submit]  a{
            margin: 0 5px;
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            border-radius: 3px;
            display: inline-block;
        }
        #action-buttons .edit {
            background-color: #4CAF50;
        }
        .action-buttons .delete {
            background-color: #f44336;
        }
        #action-buttons .edit:hover {
            background-color: #45a049;
        }
        .action-buttons .delete:hover {
            background-color: #da190b;
        }
   #customers1 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #008b8b;
  color: white;
  text-align:center;
</style>
</head>
<body>

<ul>
                     <li><a href="admin.php">Home</a></li>

     <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">View Chef</a>
     <div class="dropdown-content">
      <a href="adminviewapproved.php">Approved</a>
     <a href="adminviewrejected.php">Rejected</a>
    
     
    <li><a href="adminfeed.php">Feedback</a></li>
    <li><a href="indexanalysis.php">Analysis</a></li>
    <li style="float:right"><a class="active" href="adminlogin.php">Logout</a></li>
</ul>

 

 <h1> REPORT ANALYSIS</h1>
 <br><br>
 <CENTER>
      <table id="customers" border="2px" style="width:80%">
    <tr>
        <th>DAY REPORT</th>
    </tr>
    
    

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
echo "<td><br>Total number of approved orders for today ($today): $total_orders</br><br>";
 
echo "Total number of rejected orders for today ($today): $rejected_orders</td>";

$stmt_total->close();
$stmt_rejected->close();
$conn->close();
?> 
     </TABLE>
 
     
     
     
     
     
     
     
     
     
     
     <table  id="customers" border="2px" style="width:80%">  
     <tr>
        <th>WEEKLY ANALYSIS</th>
     
     
       
      
  </tr>
          <tr><td>
       <h2>START AND END DATE</h2>
          <div id="action-buttons">
    <form action="wanalysis.php" method="POST">
        
       Start Date:<input type="date" id="start_date" name="start_date" required>
        
        End Date: <input type="date" id="end_date" name="end_date" required>
        <br><br><br>
        <input type="submit" name="vinay" CLASS="edit">
    </form>
          </div>
       <br>
      </td>
<br><br>
          
</table>
     
     
 <table id="customers" border="2px" style="width:80%">
    <tr>
        <th>MONTHLY ANALYSIS</th>
    </tr>
    <tr>
        <td>
            <h2>SELECT YEAR AND MONTH</h2>
            <div id="action-buttons">
                <form action="manalysis.php" method="POST">
                    Year:
                    <select id="year" name="year" required>
                        <!-- Populate years dynamically or manually -->
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <!-- Add more years as needed -->
                    </select>
                    
                    Month:
                    <select id="month" name="month" required>
                        <!-- Populate months -->
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <br><br><br>
                    <input type="submit" name="submit" class="edit">
                </form>
            </div>
            <br>
        </td>
    </tr>
    <br><br>
</table>

      
</body>
</html>


