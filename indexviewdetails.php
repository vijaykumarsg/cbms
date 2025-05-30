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
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create a right-aligned (split) link inside the navigation bar */
.topnav a.split {
  float: left;
  background-color: #04AA6D;
  color: white;
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
        <h1>MY DETAILS</h1>
   <table  id="customers" border="2px" style="width:90%">
  <tr>
       
       <th>CATERING NAME</th>
        <th>NAME</th>
    <th>PHONE NUMBER</th>
      <th>EXPERIENCE</th>
     <th>EMAIL</th>
       <th>LOCATION</th>
              <th>EXPERT IN</th>
              <th>DISH TYPE</th>
              <th>NO OF MEMBERS</th>
          <th>EDIT</th>


</tr>

<?php
    include 'dbconfig.php';
    session_start();
    $uid=$_SESSION['cid'];
    
    $sql="SELECT * FROM `chef` where phno='$uid'" ;
    
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
           
            $cname=$row['cateringname'];
            $name=$row['name'];
            $phno=$row['phno'];
             $exp=$row['experience'];
            $email=$row['email'];
            $loc=$row['location'];
             $exp1=$row['expert_in'];
             $dishtype=$row['dishtype'];
             $mem=$row['nomembers'];
             


            echo "<tr><td>$cname</td>";
            echo "<td>$name</td>";

            echo "<td>$phno</td>";
            echo "<td>$exp</td>";

            echo "<td> $email</td>";
            echo "<td>$loc</td>";
            echo "<td>$exp1</td>";
            echo "<td>$dishtype</td>";
             echo "<td>$mem</td>";
             echo "<td class='action-buttons'>
                  <div>
                      <a href='indexeditdetails.php?id=$phno' class='edit'>Edit</a></td>  
                  </div>
                  </td></tr>";
 
            
                     
             
            

        }
    }
  ?>
    
    
</table>
</body>
</html>


