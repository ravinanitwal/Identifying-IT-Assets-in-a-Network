<?php
set_time_limit(0);
 $myip = "192.168.43.146";


	$query = 'ping -n 1'.' '.$myip;
	echo $query.'</br>';
	
$pingoutput = shell_exec($query);
$matchtext = "Pinging with 32 bytes of data:
Reply from : bytes=32 time< TTL=
Ping statistics for :
Packets: Sent = 1, Received = 1, Lost = 0 (0% loss),
Approximate round trip times in milli-seconds:
Minimum = 0ms, Maximum = 0ms, Average = 0ms";
similar_text($pingoutput, $matchtext, $percentage);
if ($percentage >=85){
	echo 'Host is up , IP address :'.$myip.'</br>';


$manufacturerquery = 'wmic /node:'.$myip.'/USER:"'.$myip.'\ongc" /PASSWORD:ongc computersystem get Manufacturer';
$usernamequery = 'wmic /node:'.$myip.'/USER:"'.$myip.'\ongc" /PASSWORD:ongc computersystem get username';
$osquery = 'wmic /node:'.$myip.'/USER:"'.$myip.'\ongc" /PASSWORD:ongc os get caption,version';
$drivequery = 'wmic /node:'.$myip.'/USER:"'.$myip.'\ongc" /PASSWORD:ongc memorychip get devicelocator , capacity';
$logicaldisk = 'wmic /node:'.$myip.'/USER:"'.$myip.'\ongc" /PASSWORD:ongc logicaldisk get name,filesystem';
$printer = 'wmic /node:'.$myip.'/USER:"'.$myip.'\ongc" /PASSWORD:ongc printer get name,deviceid';
$printjob = 'wmic /node:'.$myip.'/USER:"'.$myip.'\ongc" /PASSWORD:ongc printerjob get document,description';
$cpu = 'wmic /node:'.$myip.'/USER:"'.$myip.'\ongc" /PASSWORD:ongc cpu get Name, Caption, MaxClockSpeed';
$serialno = 'wmic /node:'.$myip.'/USER:"'.$myip.'\ongc" /PASSWORD:ongc os get serialnumber';





$manufacturerqueryshell = shell_exec($manufacturerquery);
$usernameshell = shell_exec($usernamequery);
$osqueryshell=shell_exec($osquery);
$drivequeryshell=shell_exec($drivequery);
$logicaldiskshell=shell_exec($logicaldisk);
$printershell = shell_exec($printer);
$printjobshell= shell_exec($printjob);
$cpushell=shell_exec($cpu);
$serialnumbershell=shell_exec($serialno);


echo '<pre>'.$manufacturerqueryshell.'</pre>';
echo '<pre>'.$usernameshell.'</pre>';
echo '<pre>'.$osqueryshell.'</pre>';
echo '<pre>'.$drivequeryshell.'</pre>';
echo '<pre>'.$logicaldiskshell.'</pre>';
echo '<pre>'.$printershell.'</pre>';
echo '<pre>'.$printjobshell.'</pre>';
echo '<pre>'.$cpushell.'</pre>';
echo '<pre>'.$serialnumbershell.'</pre>';










}

else if($percentage<85){
	echo 'Host is down..</br>';
}







?>