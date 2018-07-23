<?php
       session_start();
        $con=mysqli_connect("localhost", "root", "","ongc") or die (mysql_error()); //Connect to server
          mysqli_select_db($con,"ongc") or die ("Cannot connect to database"); //Connect to database
            
        //set_time_limit(0);
        if (isset($_GET['ip']))
        {
          $ip= $_GET['ip'];
        }

        $query = mysqli_query($con,"Select * from info");  //query the info table
        while($row = mysqli_fetch_array($query)) //display all rows fron query
        {
            $table_ip = $row['ip'];  //the first username row is passed on to $table_users, and so on
            if($ip == $table_ip) //checks if there are any matching fields
            {
              $manu=$row['manufacturer'];
              $host=$row['hostname'];
              $opsys=$row['os'];
              $pro=$row['processor'];
              $rammem=$row['ram'];
              $video=$row['videocard'];
              $local=$row['localdd'];
              $mounted=$row['mountedfile'];
              $user=$row['availuser'];
              $printerinfo=$row['printer'];
              $ssno=$row['ssn'];
              $status=$row['updown'];
              echo "";
            }
        }
      ?>


<!DOCTYPE html>
<html>
<head>
	<title>ONGC IT Assets</title>
  <link rel="icon" href="logo2.png" type="image/gif" sizes="100x100">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="sfile.css?version=5">

    <style type="text/css">
        #sbutton{
          display: inline-block;
          border-radius: 2%;
          border: none;
          color: #FFFFFF;
          font-style: normal;
          text-align: center;
          font-size: 18px;
          padding: 1%;
          margin-right:1%;
          width:20%;
          background-color: #03c03c;
        }
        #sbutton:hover{
          background-color: #05a836;
                  }
         #lobutton{
          display: inline-block;
          border-radius: 2%;
          border: none;
          color: #FFFFFF;
          font-style: normal;
          text-align: center;
          font-size: 18px;
          padding: 1%;
          margin: 0%;
          width:10%;
          background-color: #DB3A34;
        }
        #lobutton:hover{
          background-color: #c12a24;
                  }
        #upbutton{
          display: inline-block;
          border-radius: 2%;
          border: none;
          color: #FFFFFF;
          font-style: normal;
          text-align: center;
          font-size: 18px;
          padding: 1.4%;
          margin:1% 1.5% 0% 1.5%;
          width:20%;
          background-color: #03c03c;
        }
        #upbutton:hover{
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        #downbutton{
          display: inline-block;
          border-radius: 2%;
          border: none;
          color: #FFFFFF;
          font-style: normal;
          text-align: center;
          font-size: 18px;
          padding: 1.4%;
          margin: 1% 1.5% 0% 1.5%;
          width:20%;
          background-color: #DB3A34;
          outline: none;
        }
        #display{
          margin: 6% 7% 0% 0%;
          text-align: center;
          font-size: 16px;
        }
        hr { 
        	margin-top: 1.5%;
          background-color: #00aced;
          border:none;
          height: 1.8px;
          width:800px;
          float: left;
        }
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
         }

        td, th {

          border: 1px solid #f1f1c1;
          text-align: left;
          padding: 8px;
         }

        tr:nth-child(even) {
          background-color: #f1f1c1;
        }

.xx{
  width: 20%;
}

    </style>
    <script type="text/javascript">
        function redirect(){
            window.location="logout.php"
            return}
        function redirects(){
            window.location="rhome.php"
            return}

    </script>
    </head>

<body>
<div class="jumbotron" id="center" style="margin-bottom: 0%;">
		<div class="col-xs-7" style="font-size: 25px; font-family: Trebuchet MS;">
		<span class="glyphicon glyphicon-user glyph" style="color:#00aced; font-size:35px; padding:0% 2% 0% 2%;"></span>
	ONGC - IT Assets Portal, Information of IP: <?php echo "$ip"?>
		<hr>
	</div>
	<div >

		<button id="lobutton" style="float: right;" onclick="redirect()">Log Out&nbsp&nbsp<span class="glyphicon glyphicon-log-out" style="color:#FFFFFF; font-size:20px; padding-right:2%;"></span></button>
    <button id="sbutton" style="float: right;" onclick="redirects()">Search New Range&nbsp&nbsp<span class="glyphicon glyphicon-search" style="color:#FFFFFF; font-size:20px; padding-right:2%;"></span></button>
	</div>
  <br>
  <div id="display">
    <table>
      <tr>
        <th class="xx">Detail Name</th>
        <th>Information</th>
      </tr>
      <tr>
        <td class="xx">Hostname</td>
        <td><?php echo $host ?></td>
      </tr>
       <tr>
        <td class="xx">Up/Down Status</td>
        <td><?php echo $status ?></td>
      </tr>
      <tr>
        <td class="xx">OS Name & Version</td>
        <td><?php echo $opsys ?></td>
      </tr>
      <tr>
        <td class="xx">Manufacturer</td>
        <td><?php echo $manu ?></td>
      </tr>
      <tr>
        <td class="xx">Processor</td>
        <td><?php echo $pro ?></td>
      </tr>
      <tr>
        <td class="xx">RAM Capacity</td>
        <td><?php echo $rammem ?></td>
      </tr>
      <tr>
        <td class="xx">Video Card</td>
        <td><?php echo $video ?></td>
      </tr>
      <tr>
        <td class="xx">Local file systems / Disk Drives </td>
        <td><?php echo $local ?></td>
      </tr>
      <tr>
        <td class="xx">Mounted network file systems</td>
        <td><?php echo $mounted ?></td>
      </tr>
      <tr>
        <td class="xx">Available Users</td>
        <td><?php echo $user ?></td>
      </tr>
      <tr>
        <td class="xx">Attached Devices</td>
        <td><?php echo $printerinfo ?></td>
      </tr>
      <tr>
        <td class="xx">System Serial Number</td>
        <td><?php echo $ssno ?></td>
      </tr>
     
    </table>
       </div>
  </div>

<div>
        <p id="footer" style="color: #FFFFFF; margin-top:0%;">Created by @ravinanitwal under ONGC Summer Training June 2018</p>
    </div>
</body>
</html>