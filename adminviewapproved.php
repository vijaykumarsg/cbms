<!DOCTYPE html>
<html>
<head>
            <link rel="stylesheet" href="style.css"/>

     <link rel="stylesheet" href="style1.css">
          <link rel="stylesheet" href="userstyle.css">

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
    text-align: center;
    background-color:#008B8B;
    color: #f0e68c;
    height:45px;
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

</ul>
</table>
    </center>
           <h1>APPROVED CHEFS</h1>
          
    <center>       
  <table  id="customers" border="2px" style="width:80%">
  <tr>
        <th>SL NO</th>
    <th>CATERING NAME</th>
    <th>OWNER NAME</th>
     <th>LOCATION</th>
     <th>EXPERT IN</th>
          <th>DISH TYPE</th>

     <th>PHONE</th>
     
      
  </tr>
  <?php
    include 'dbconfig.php';
    $slno=0;
    $sql="SELECT * FROM `chef` WHERE status='Approved'";
     $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $slno++;
            $cateringname=$row['cateringname'];
            $name=$row['name'];
            $phno=$row['phno'];
            $experience=$row['experience'];
            $email=$row['email'];
            $location=$row['location'];
            $expert_in=$row['expert_in'];
                         $dish_type=$row['dishtype'];

            echo "<tr><td>$slno</td>";
            echo "<td>$cateringname</td>";
            echo "<td>$name</td>";
            echo "<td>$location</td>";
            echo "<td>$expert_in</td>";
            echo "<td>$dish_type</td>";

            echo "<td>$phno</td>";
           
            

        }
    }
  
  
  
  
  ?>
   
</table>
    </center>        

</body>
</html>


