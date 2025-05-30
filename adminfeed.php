<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="style1.css">
          <link rel="stylesheet" href="style.css">

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
h1{
    background-color: #008B8B;
    color:#f0e68c;
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

body{
        background-color:#fafad2;

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

<center>       
        <table  id="customers" style="width:60%">
            
                <h1>FEEDBACK FROM COSTOMERS<h1>
            
  <tr>
       <th>SL NO</th>
       <th>CHEF NAME</th>

      <th>USER NAME</th>
      <th>VIEW FEEDBACK</th>
     

     
      
  </tr>
  <?php
    include 'dbconfig.php';
    $slno=0;
    $sql="SELECT * FROM `feedback`";
      $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $slno++;
            $cid =$row['chef_id'];

            $uid =$row['user_id'];
            
            $sql1="SELECT * FROM `chef` where phno='$cid'" ;
 
             $result1=$conn->query($sql1);
            if($result1->num_rows>0)
            {
                   while($row1=$result1->fetch_assoc())
                   { 
                       $cname=$row1['name'];
                        $sql2="SELECT * FROM `user` where email='$uid'";
 
                        $result2=$conn->query($sql2);
                       if($result2->num_rows>0)
                        {
                            while($row2=$result2->fetch_assoc())
                             {
                                    $uname=$row2['name'];

                                    echo "<tr><td>$slno</td>";
                                    echo "<td> $cname</td>";

                                     echo "<td> $uname</td>";
                                        echo "<td class='action-buttons'>
                  <div>
                       <a href='adminfeedview.php?uid=$uid&cid=$cid' class='edit'>View Feedback</a
                  </div>
                  </td></tr>";
      
            

                             }
                        }
                   }
            }
        }
    }
  
  
  
  
  ?>
   
</table>
 </center>



</body>
</html>


