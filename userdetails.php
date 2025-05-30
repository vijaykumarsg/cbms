 <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="userstyle.css"/>
        <link rel="stylesheet" href="style.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>h1{
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
body{
        background-color:#fafad2;

}
a.split{
    background-color:#4CAF50;
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
     

 <div class="topnav">
    <a class="active" href="userhome.php">Home</a>
    <a href="userfindchef.php">Find Chefs</a>
    <a href="userdetails.php" >View details</a>
    <a href="userratings1.php">Feedback</a>
    
          
      <a href="userlogin.php" class="split">Logout</a>
    <a  href="changepass.php" style="float:right">Change Password</a></li>
 </div>
    
    
    <center>   
        <h1>MY DETAILS</H1>
  <table  id="customers" border="2px" style="width:80%">
  <tr>
       
       
        <th>NAME</th>
    <th>PHONE NUMBER</th>
    <th>EMAIL</th>
     <th>ADDRESS</th>
     <th>DOB</th>
       <th>EDIT</th>
</tr>
  
  
   <?php
   
    include 'dbconfig.php';
    session_start();
    $uid=$_SESSION['uname'];
    
    $sql="SELECT * FROM `user` where email='$uid'" ;
    
     $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
           
             
            $name=$row['name'];
            $phno=$row['phnumber'];
             $email=$row['email'];
            $address=$row['address'];
            $dob=$row['dob'];

            echo "<tr><td>$name</td>";
            echo "<td>$phno</td>";
            echo "<td> $email</td>";
            echo "<td>$address</td>";
            echo "<td>$dob</td>";
            echo "<td class='action-buttons'>
                  <div>
                  <a href='usereditdetails.php?id=$email' class='edit'>Edit</a>
                     </div>
                  </td></tr>";
             
 
            
              
            

        }
    }
  
  
  
  
  ?>
   
</table>
    </center>
    
   

 

</body>
</html>
