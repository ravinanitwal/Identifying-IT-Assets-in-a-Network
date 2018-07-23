<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = ($_POST['username']);
  $password = ($_POST['password']);

  $bool = true;

  $con=mysqli_connect("localhost", "root", "") or die(mysql_error()); //connect to server
  mysqli_select_db($con,"ongc") or die("Cannot connect to database"); //connect to database
  $query = mysqli_query($con,"Select * from users");  //query the users table
  while($row = mysqli_fetch_array($query)) //display all rows fron query
  {
    $table_users = $row['username'];  //the first username row is passed on to $table_users, and so on
    if($username == $table_users) //checks if there are any matching fields
    {
      $bool = false;  //sets bool to false
      Print '<script>alert("Username has been taken!");</script>';//prompts the user
      Print '<script>window.location.assign("rregister.php");</script>'; //redirects to rregister.php
    }
  }
  if($bool) //checks if bool id true
  {
    mysqli_query($con,"INSERT INTO users (username, password) VALUES ('$username','$password')"); //inserts the value to table users
    Print '<script>alert("Successfully registered!");</script>';//prompts the user
    Print '<script>window.location.assign("rlogin.php");</script>'; //redirects to rlogin.php
  }
}
?>
<html>
<head>
    <title>ONGC IT Assets</title>
    <link rel="icon" href="logo2.png" type="image/gif" sizes="100x100">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="sfile.css?version=3">
    <script type="text/javascript">
        function redirect(){
            window.location="rindex.php"
            return }

    </script>
    <style type="text/css">
   
     #ipbutton1{ 
        display: inline-block;
        border-radius: 1%;
        border: none;
        font-style: normal;
        font-size: 18px;
        padding: 1.8%;
        margin: 1% 0% 0.8% 7%;
        width: 83%; 
      }
      #logbutton{
         background-color:#03c03c; 
         display: inline-block;
         border-radius: 50px;
         border:none;
         color: #FFFFFF;
         font-style: normal;
         text-align: center;
         font-size: 26px;
         padding: 1.8%;
         margin:3% 0% 10% 7%;       
         width: 83%;
         outline: none; 
     
      }
      #logbutton:hover {
         background-color: #02872a;
         color: white;
      }
    </style>

</head>
<body>
    <div >

         <div id="left">
        <div id="glyph" style="color: #FFFFFF;">
        <span class="glyphicon glyphicon-cog glyph" style="color:#FFFFFF; font-size:35px; padding-right:2%;"></span>Get IT assets around you!
                  </br></br>
        <span class="glyphicon glyphicon-th-list glyph"  style="color: #FFFFFF; font-size:35px;padding-right:2%;"></span>      Hostnames, OS Versions, Processor Details and what not!
            </br></br>

        <span class="glyphicon glyphicon-hand-down glyph" style="color:#FFFFFF; font-size:35px;padding-right:2%;"></span>      All these details just a click away. 
 
        </div>

        </div>
        <div class="jumbotron" id="right">
                 <img id="image" src="logo.png">
                 <br><br><br>
        <form action="" method="POST">
          <input id="ipbutton1" type="text" name="username" required="required" placeholder="Username"/><br>
          <input id="ipbutton1" type="password" name="password" required="password" placeholder="Password"/>
          <button type="submit" id="logbutton">Register</button>
        </form>
        <p id="footer">Created by @ravinanitwal</p>
             </div>
                 
    </div>
</body>
</html>


