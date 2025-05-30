<html>
    <head>
        <link rel="stylesheet" href="userstyle.css"/>
         <style>
            h1{
    text-align: center;
    color:white;
    background-color:gray;
    font-family:monospace;
    font-size:40px;

}

.topnav input[type=text] {
  float: right;
  
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
  background-color:wheat;
  
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
    color:white;
  }
}
  
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
  h1{
      font-family: serif;
      background-color:#008080;
      color:#fff5ee;
  }
  #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width:100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
  
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
  a.split{
    background-color:#4CAF50;
}
 input[type=text]
 {
 border: 1px solid #ddd;

  width: 50%;
  padding: 15px;
  margin-left:10%;
  margin-right: 50%;
  }
#myInput {
  background-position: 10px 10px;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  margin-bottom: 12px;
   background-color:#e0ffff;
   
}
 * {
  box-sizing: border-box;
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
    
          <h1>LIST OF CHEFS</h1>
          
    <center>
          <div class="search-container">

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for locations.." title="Type in a name">
          </div>
        <table  id="customers" style="width:80%">
  <tr>
      <th>SLNO</th>
    <th>CATERING NAME</th>
    <th>OWNER NAME</th>
     <th>LOCATION</th>
     <th>EXPERT IN</th>
          <th>DISH TYPE</th>

     <th>PHONE</th>
      <th>ORDER</th>
      
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
            echo "<td class='action-buttons'>
                  <div>
                  <a href='userbookingform.php?id=$phno' class='edit'>BOOK</a>
                    </div>
                  </td></tr>";
             

        }
    }
  
  
  
  
  ?>
   
</table>
    </center>  
    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("customers");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>
 

          
    