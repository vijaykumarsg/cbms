<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="userstyle.css"/>
        <link rel="stylesheet" href="style.css"/>
            <link rel="stylesheet" href="style1.css"/>
 <style>
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
body{
        background-color:#fafad2;

}
a.split{
    background-color:#4CAF50;
}


 </style>
</head>
<body>
     

<div class="topnav">
    <a class="active" href="userhome.php">Home</a>
    <a href="userfindchef.php">Find Chefs</a>
    <a href="userdetails.php" >View details</a>
    <a href="userratings1.php">Feedback</a>
     <a href="userlogin.php" class="split">Logout</a>
    <a  href="changepass.php" style="float:right">Change Password</a></li>
</div>
    
   <center>       
        <table  id="customers" style="width:90%">
            
                <h1>MY ORDERS<h1>
            
  <tr>
       <th>SL NO</th>
      <th>CHEF NAME</th>
      <th>PHONE NUMBER</th>
    <th>NUMBER OF PEOPLES</th>
    <th>DATE</th>
     <th>LOCATION</th>
     <th>DISH TYPE</th>
     <th> STATUS </th>

     
      
  </tr>
  <?php
    include 'dbconfig.php';
    $slno=0;
    session_start();
    //$chef= $_SESSION['cid'];
     $uid=$_SESSION['uname'];
    // echo $uid;
    $sql="SELECT * FROM `book1` WHERE `user_id`='$uid'";
     $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $chefid=$row['chef_id'];
            //echo $chefid;
           $sql1="SELECT * FROM `chef` WHERE phno='$chefid'";
               //echo $sql1;
           $result1=$conn->query($sql1);
           if($result1->num_rows>0)
            {
             while($row1=$result1->fetch_assoc())
             {
                  
            $slno++;
             $cname=$row1['name'];
            $phno =$row['phno'];
            $nopeople=$row['people'];
            $date=$row['date'];
            $location=$row['location'];
            $dish=$row['dish'];
            $status=$row['status'];
             
            echo "<tr><td>$slno</td>";
            echo "<td> $cname</td>";
            echo "<td>$phno</td>";
            echo "<td> $nopeople</td>";
            echo "<td> $date</td>";
            echo "<td> $location</td>";
            echo "<td> $dish</td>";
            echo "<td> $status</td> </tr>";

             
     
            

            }
            }
        }
    }
  
  
  
  
  ?>
   
</table>
 </center> 

 

</body>
</html>
