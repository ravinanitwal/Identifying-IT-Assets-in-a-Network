<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: rindex.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   ?>


<!DOCTYPE html>
<html>
<head>
	<title>ONGC IT Assets</title>
	<link rel="icon" href="logo2.png" type="image/gif" sizes="100x100">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="sfile.css?version=5">

    <style type="text/css">
    	#ipbutton1{ 
          display: inline-block;
          border-radius: 1%;
          border: none;
          font-style: normal;
          text-align: center;
          font-size: 18px;
          padding: 1.2%;
          margin:5% 0% 2% 22%;
          width: 70%; 
        }
        #ebutton2{
          display: inline-block;
          border-radius: 2%;
          border: none;
          color: #FFFFFF;
          font-style: normal;
          text-align: center;
          font-size: 18px;
          padding: 1.2%;
          margin:0% 0% 3% 22%;
          width:70%;
          background-color: #03c03c;
        }
        #ebutton2:hover{
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
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
        hr { 
        	margin-top: 1.5%;
          background-color: #00aced;
          border:none;
          height: 1.8px;
        }
    .youtube-player {
        position: relative;
        padding-bottom: 56.23%;
        /* Use 75% for 4:3 videos */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
        margin: 5px;
    }
    
    .youtube-player iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 100;
        background: transparent;
    }
    
    .youtube-player img {
        bottom: 0;
        display: block;
        left: 0;
        margin: auto;
        max-width: 100%;
        width: 100%;
        position: absolute;
        right: 0;
        top: 0;
        border: none;
        height: auto;
        cursor: pointer;
        -webkit-transition: .4s all;
        -moz-transition: .4s all;
        transition: .4s all;
    }
    
    .youtube-player img:hover {
        -webkit-filter: brightness(75%);
    }
    
    .youtube-player .play {
        height: 540px;
        width: 840px;
        left: 50%;
        top: 50%;
        margin-left: -36px;
        margin-top: -36px;
        position: absolute;
        background: url("//i.imgur.com/TxzC70f.png") no-repeat;
        cursor: pointer;
    }

    </style>
    <script>

    /* Light YouTube Embeds by @labnol */
    /* Web: http://labnol.org/?p=27941 */

    document.addEventListener("DOMContentLoaded",
        function() {
            var div, n,
                v = document.getElementsByClassName("youtube-player");
            for (n = 0; n < v.length; n++) {
                div = document.createElement("div");
                div.setAttribute("data-id", v[n].dataset.id);
                div.innerHTML = labnolThumb(v[n].dataset.id);
                div.onclick = labnolIframe;
                v[n].appendChild(div);
            }
        });

    function labnolThumb(id) {
        var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
            play = '<div class="play"></div>';
        return thumb.replace("ID", id) + play;
    }

    function labnolIframe() {
        var iframe = document.createElement("iframe");
        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }
     function redirect(){
            window.location="logout.php"
            return }

</script>
</head>

<body>
<div class="jumbotron" id="center" style="margin-bottom: 0%;height:105%;">
		<div class="col-xs-10" style="font-size: 25px; font-family: Trebuchet MS;">
		<span class="glyphicon glyphicon-user glyph" style="color:#00aced; font-size:35px; padding:0% 2% 0% 2%;"></span>
		Welcome to ONGC - IT Assets Portal, <?php Print "$user"?> !
		<hr>
	</div>
	<div>
		<button id="lobutton" style="float: right;" onclick="redirect()">Log Out&nbsp&nbsp<span class="glyphicon glyphicon-log-out" style="color:#FFFFFF; font-size:20px; padding-right:2%;"></span></button>
	</div>
    <div id="left" style="height:auto; padding: 5% 0% 0% 3%;">
    
    	<div class="youtube-player" data-id="2OohjaX8C9U"></div>
    </div>
    <div id="right" style="height: auto;">
	<img src="logo.png" style="padding:4% 0% 3% 45%;">
	<form action="rresult.php" style="whitespace:nowrap overflow-x:auto" method="GET">
            
            <input id="ipbutton1" type="text" required placeholder="Enter IP Address"  name="iprange">
            <button type="submit" id="ebutton2">Submit</button>
          </form>

</div>


</div>
<div>
        <p id="footer" style="color: #FFFFFF; margin-top:0%;">Created by @ravinanitwal under ONGC Summer Training June 2018</p>
    </div>
</body>
</html>