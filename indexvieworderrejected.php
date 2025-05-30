 <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="userstyle.css">
        <link rel="stylesheet" href="style1.css">
                        <link rel="stylesheet" href="style.css">


<style>
     body{
        background-color:#fafad2;

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
h1{
    background-color: #008B8B;
    color:#FFF8DC;
    font-size:35px;
    
    font-family:serif;
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
 



</style>
</head>
<body>

<ul>
    <li><a href="indexhome.php">Home</a></li>
   <li><a href="indexviewdetails.php">View details</a></li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"> Orders</a>
    <div class="dropdown-content">
         <a href="indexvieworderapproved.php">Approved Orders</a>
        <a href="indexvieworderrejected.php">Rejected Orders</a>
    
  </li> 
         <li><a href=" indexratings.php">Feedback</a></li>

        <li style="float:right"><a class="active" href="indexlogin.php">Logout</a></li>
        <li style="float:right"><a  href="changepasschef.php">Change Password</a></li>

      
    </div>
  </li>
 
</ul>
    <center>       
        <table  id="customers" style="width:80%">
            
                <h1>REJECTED ORDERS<h1>
            
  <tr>
      <th>SL NO</th>
      <th> USER ID</th>
      <th>PHONE NUMBER </th>
    <th>NUMBER OF PEOPLES</th>
    <th>DATE</th>
     <th>LOCATION</th>
     <th>DISH TYPE</th>
          

     
      
  </tr>
  <?php
    include 'dbconfig.php';
    $slno=0;
    session_start();
    $chef= $_SESSION['cid'];
     
    $sql="SELECT * FROM `book1` WHERE chef_id='$chef' and status='rejected'";
     $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $slno++;
            $uid =$row['user_id'];
            $phno =$row['phno'];
            $nopeople=$row['people'];
            $date=$row['date'];
            $location=$row['location'];
            $dish=$row['dish'];
             
            echo "<tr><td>$slno</td>";
            echo "<td> $uid</td>";
            echo "<td>$phno</td>";
            echo "<td> $nopeople</td>";
            echo "<td> $date</td>";
            echo "<td> $location</td>";
            echo "<td> $dish</td><tr>";
            
            
     
            

        }
    }
  
  
  
  
  ?>
   
</table>

</body>
</html>


