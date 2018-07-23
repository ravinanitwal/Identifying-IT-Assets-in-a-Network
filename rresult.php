<?php
   session_start(); //starts the session
   $user = $_SESSION['user']; //assigns user value
   ?>

<!DOCTYPE html>
<html>
<head>
	<title>ONGC IT Assets</title>
  <link rel="icon" href="logo2.png" type="image/gif" sizes="100x100">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="sfile.css?version=3">

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
 #linuxbutton{
          display: inline-block;
          border-radius: 2%;
          border-color:#ff0097;
          color: #FFFFFF;
          border-width:0px 0px 0px 10px;
          font-style: normal;
          text-align: center;
          font-size: 18px;
          padding: 1.4%;
          margin:1% 1.5% 0% 1.5%;
          width:20%;
          background-color: #03c03c;
        }
        #linuxbutton:hover{
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        #windowsbutton{
          display: inline-block;
          border-radius: 2%;
          border-color:#2b5797;
          border-width:0px 0px 0px 10px;
          color: #FFFFFF;
          font-style: normal;
          text-align: center;
          font-size: 18px;
          padding: 1.4%;
          margin:1% 1.5% 0% 1.5%;
          width:20%;
          background-color: #03c03c;
        }
        #windowsbutton:hover{
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
          margin: 8% 7% 0% 0%;
        }
         hr { 
          margin-top: 1.5%;
          background-color: #00aced;
          border:none;
          height: 1.8px;
          width:800px;
          float: left;
        }
  .dot {
           height: 20px;
           width: 20px;
           border-radius: 50%;
           display: inline-block;
        }
        #a{
           background-color:#03c03c;
        }
        #b{
           background-color:#DB3A34;
        }
        #c{
           background-color:#2b5797;
        }
        #d{
           background-color:#ff0097;
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
<div class="jumbotron" id="center" style="margin-bottom: 0%;height:105%;">
		<div class="col-xs-7" style="font-size: 25px; font-family: Trebuchet MS;">
		<span class="glyphicon glyphicon-user glyph" style="color:#00aced; font-size:35px; padding:0% 2% 0% 2%;"></span>
	ONGC - IT Assets Portal, logged as <?php Print "$user"?> !
		<hr>
	</div>
	<div >

    <button id="lobutton" style="float: right;" onclick="redirect()">Log Out&nbsp&nbsp<span class="glyphicon glyphicon-log-out" style="color:#FFFFFF; font-size:20px; padding-right:2%;"></span></button>
    <button id="sbutton" style="float: right;" onclick="redirects()">Search New Range&nbsp&nbsp<span class="glyphicon glyphicon-search" style="color:#FFFFFF; font-size:20px; padding-right:2%;"></span></button>
  </div>
  <br>
  <div id="display">
 
 <?php
            $bool = true;

          $con=mysqli_connect("localhost", "root", "","ongc") or die (mysql_error()); //Connect to server
            mysqli_select_db($con,"ongc") or die ("Cannot connect to database"); //Connect to database
            
          set_time_limit(0);
          if (isset($_GET['iprange']))
          {
            $iprange = $_GET['iprange'];
          }
          else $iprange = "192.168.225.108-110";

          $explodedarray =explode('-',$iprange) ;
          $loopend =  $explodedarray[1];

          $explodedarray2 = explode('.' , $explodedarray[0]);
          $ippart1 =  $explodedarray2[0];
          $ippart2 =  $explodedarray2[1];
          $ippart3 = $explodedarray2[2];
          $loopbegin = $explodedarray2[3];

          $i=$loopbegin;

          $delquery = "DELETE FROM info";
          if(mysqli_query($con , $delquery))
          {
            //echo 'All records cleared';
          }

          
          for($i;$i<=$loopend;)
          {
            $ip = $ippart1.'.'.$ippart2.'.'.$ippart3.'.'.$i;
            //echo $ip.'</br>';
            $query = 'ping -n 1'.' '.$ip;
            //echo $query.'</br>';
            
            $pingoutput = shell_exec($query);
            $matchtext = "Pinging with 32 bytes of data:
            Reply from : bytes=32 time< TTL=
            Ping statistics for :
            Packets: Sent = 1, Received = 1, Lost = 0 (0% loss),
            Approximate round trip times in milli-seconds:
            Minimum = 0ms, Maximum = 0ms, Average = 0ms";
            similar_text($pingoutput, $matchtext, $percentage);

            if ($percentage >=80)
            {
              //echo 'Host is up , IP address :'.$ip.'</br>';

              $manufacturerquery = 'wmic /node:'.$ip.'/USER:"'.$ip.'\ongc" /PASSWORD:ongc computersystem get Manufacturer';
              $usernamequery = 'wmic /node:'.$ip.'/USER:"'.$ip.'\ongc" /PASSWORD:ongc computersystem get username';
              $osquery = 'wmic /node:'.$ip.'/USER:"'.$ip.'\ongc" /PASSWORD:ongc os get caption,version';
              $drivequery = 'wmic /node:'.$ip.'/USER:"'.$ip.'\ongc" /PASSWORD:ongc memorychip get devicelocator , capacity';
              $logicaldisk = 'wmic /node:'.$ip.'/USER:"'.$ip.'\ongc" /PASSWORD:ongc logicaldisk get name,filesystem';
              $printer = 'wmic /node:'.$ip.'/USER:"'.$ip.'\ongc" /PASSWORD:ongc printer get name,deviceid';
              $printjob = 'wmic /node:'.$ip.'/USER:"'.$ip.'\ongc" /PASSWORD:ongc printerjob get document,description';
              $cpu = 'wmic /node:'.$ip.'/USER:"'.$ip.'\ongc" /PASSWORD:ongc cpu get Name, Caption, MaxClockSpeed';
              $serialno = 'wmic /node:'.$ip.'/USER:"'.$ip.'\ongc" /PASSWORD:ongc os get serialnumber';

              //$manufacturerqueryshell = shell_exec($manufacturerquery);
              //$usernameshell = shell_exec($usernamequery);
              //$osqueryshell=shell_exec($osquery);
              //$drivequeryshell=shell_exec($drivequery);
              //$logicaldiskshell=shell_exec($logicaldisk);
              //$printershell = shell_exec($printer);
              //$printjobshell= shell_exec($printjob);
              //$cpushell=shell_exec($cpu);
              //$serialnumbershell=shell_exec($serialno);

          
              //$insertquery = mysqli_query($con,"INSERT INTO info (`ip`, `manufacturer`,`hostname`, `os`, `processor`, `ram`,`videocard`, `localdd`, `mountedfile`,`availuser`, `printer`, `ssn`, `updown`, `uid`) VALUES('$ip' ,'$manufacturerqueryshell','$usernameshell','$osqueryshell','$cpushell','$drivequeryshell','Not available','$logicaldiskshell','Not available','Not available','$printershell','$serialnumbershell','UP','')");
              

             $link1='rdetails.php';
              //echo"<a href='$link1?ip=$ip'><button id='upbutton'>$ip</button></a>";


              $manufacturerqueryshell = shell_exec($manufacturerquery);
               if(strlen($manufacturerqueryshell)==4){

              $manufacturerqueryshell = shell_exec('plink.exe root@'.$ip.' -pw ongc123 -C "dmidecode -s system-manufacturer"');
              echo"<a href='$link1?ip=$ip'><button id='linuxbutton'>$ip</button></a>";
              }
              else{
                echo"<a href='$link1?ip=$ip'><button id='windowsbutton'>$ip</button></a>";
              }

               $usernameshell = shell_exec($usernamequery);
               if(strlen($usernameshell)==4){
               $usernameshell=shell_exec('plink.exe root@'.$ip.' -pw ongc123 -C "whoami"');

               }
               $osqueryshell=shell_exec($osquery);
               if(strlen($osqueryshell)==4){
               $osqueryshell=shell_exec('plink.exe root@'.$ip.' -pw ongc123 -C "lsb_release -a"');

               }
               $drivequeryshell=shell_exec($drivequery);
               if(strlen($drivequeryshell)==4){
               $drivequeryshell=shell_exec('plink.exe root@'.$ip.' -pw ongc123 -C "free"');

               }
               $logicaldiskshell=shell_exec($logicaldisk);


               $printershell = shell_exec($printer);
               $printjobshell= shell_exec($printjob);
               $cpushell=shell_exec($cpu);
              
               $vgaquery = '"lspci  -v -s  $(lspci | grep " VGA " | cut -d" " -f 1)"'."'";
               $vgashell=shell_exec('plink.exe root@'.$ip.' -pw ongc123 -C '.$vgaquery);

               if(strlen($cpushell)==4){
               $cpushell=shell_exec('plink.exe root@'.$ip.' -pw ongc123 -C "dmidecode -s  processor-version"');

               }
               $serialnumbershell=shell_exec($serialno);
               if(strlen($serialnumbershell)==4){
               $serialnumbershell=shell_exec('plink.exe root@'.$ip.' -pw ongc123 -C "dmidecode -s system-serial-number"');

               }
               $mountedfilesystem = shell_exec('plink.exe root@'.$ip.' -pw ongc123 -C "findmnt -lo source,target,fstype,label,options,used -t ext4"');
               $availusers = shell_exec('plink.exe root@'.$ip.' -pw ongc123 -C "getent passwd"');
              

          
               $insertquery = mysqli_query($con,"INSERT INTO info (`ip`, `manufacturer`,`hostname`, `os`, `processor`, `ram`,`videocard`, `localdd`, `mountedfile`,`availuser`, `printer`, `ssn`, `updown`, `uid`) VALUES('$ip' ,'$manufacturerqueryshell','$usernameshell','$osqueryshell','$cpushell','$drivequeryshell','$vgashell','$logicaldiskshell','$mountedfilesystem','$availusers','$printershell','$serialnumbershell','UP','')");
              
              

             
              
          
            }
            else if($percentage<80)
            {
              $downinsertquery = mysqli_query($con,"INSERT INTO INFO(`ip`,`manufacturer`,`hostname`,`os`,`processor`,`ram`,`videocard`,`localdd`,`mountedfile`,`availuser`,`printer`,`ssn`,`updown`,`uid`) VALUES('$ip','Not available','Not available','Not available','Not available','Not available','Not available','Not available','Not available','Not available','Not available','Not available','DOWN','')");
              
              echo"<button id='downbutton'>$ip</button>";
          
            }
            
            $i=$i+1;
          }//for loop ends          

        ?>

</div>
<div style="float: right;margin:10% 0% 0% 4%;color: white;display: inline-block;font-style: italic;font-size: 15px;">
  <fieldset style="border:solid; padding:7px;">
  <legend style="color: white; font-size: 22px; border:none;">Legend:</legend>
<span class="dot" id="a"></span>Host is Up<br>
  <span class="dot" id="b"></span>Host is Down<br>
  <span class="dot" id="c"></span>System is Windows<br>
  <span class="dot" id="d"></span>System is Linux<br>
 </fieldset>
</div>
</div>

<div>
        <p id="footer" style="color: #FFFFFF; margin-top:0%;"> ONGC Summer Training June 2018</p>
    </div>
</body>
</html>