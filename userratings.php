<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="userstyle.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
 
body {
   min-height: 80vh;

  align-items: center;
  text-align: center;
  justify-content: center;
  font-family: "Poppins", sans-serif;
}
 
.card {
  max-width: 33rem;
  background:#8FBC8F ;
  margin: 0 1rem;
  padding: 1rem;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  width: 100%;
  border-radius: 0.3rem;
  margin-left: auto;
  margin-right: auto;
  margin-top: 200px;
}
 
.star {
  font-size: 10vh;
  cursor: pointer;
}
 
.one {
  color: rgb(255, 0, 0);
}
 
.two {
  color: rgb(255, 106, 0);
}
 
.three {
  color: rgb(251, 255, 120);
}
 
.four {
  color: rgb(255, 255, 0);
}
 
.five {
  color: rgb(24, 159, 14);
}
.topnav {
  overflow: hidden;
  background-color: #333;
}
h1{
     color:#8B0000;
    font-size:35px;
    font-family:serif;
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
body{
        background-color:#fafad2;

}

</style>
</head>
<body>
     <div class="topnav">
     
      <a href="userdetails.php" class="split"> Back </a>
</div>

  
 

   <div class="card">
        <h1>RATE YOUR EXPERIENCE</h1>
        <br />
        <span onclick="gfg(1)"
              class="star">★
        </span>
        <span onclick="gfg(2)"
              class="star">★
        </span>
        <span onclick="gfg(3)"
              class="star">★
        </span>
        <span onclick="gfg(4)"
              class="star">★
        </span>
        <span onclick="gfg(5)"
              class="star">★
        </span>
        <h3 id="output">
              Rating is: 0/5
          </h3>
        <input type="text" id="output">
    </div>

    
    
   

 <script  >
 // To access the stars
let stars = 
    document.getElementsByClassName("star");
let output = 
    document.getElementById("output");
    
 
// Funtion to update rating
function gfg(n) {
    remove();
    for (let i = 0; i < n; i++) {
        if (n == 1) cls = "one";
        else if (n == 2) cls = "two";
        else if (n == 3) cls = "three";
        else if (n == 4) cls = "four";
        else if (n == 5) cls = "five";
        stars[i].className = "star " + cls;
    }
    output.innerText = "Rating is: " + n + "/5";
}
 
// To remove the pre-applied styling
function remove() {
    let i = 0;
    while (i < 5) {
        stars[i].className = "star";
        i++;
    }
}</script>

</body>
</html>
