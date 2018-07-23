<html>
<head>
    <title>ONGC IT Assets</title>
    <link rel="icon" href="logo2.png" type="image/gif" sizes="100x100">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="sfile.css?version=3">
    <script type="text/javascript">
         function toregister(){
            window.location="rregister.php."
            return }
        function tologin(){
            window.location="rlogin.php."
            return }

    </script>
 
    <style type="text/css">
      #logbutton{
         background-color:#fecc00; 
         display: inline-block;
         border-radius: 50px;
         border: 2px solid #DB3A34;
         color: #FFFFFF;
         font-style: normal;
         text-align: center;
         font-size: 26px;
         padding: 1.8%;
         margin:1% 0% 10% 7%;       
         width: 83%; 
         outline: none; 
      }
      #logbutton:hover {
         background-color: #e8bb04;
         color: white;
      }
      #sigbutton{
         background-color:#DB3A34; 
         display: inline-block;
         border-radius: 50px;
         border: none;
         color: #FFFFFF;
         font-style: normal;
         text-align: center;
         font-size: 26px;
         padding: 1.8%;
         margin:14% 0% 3% 7%;
         width: 83%; 
         outline: none; 
      }
      #sigbutton:hover {
         background-color: #c1312c;
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
                 <br>
                 <button id="sigbutton" onclick="toregister()">Register</button>
                 <button id="logbutton" onclick="tologin()">Log In</button>
        <p id="footer">Created by @ravinanitwal</p>
             </div>
                 
    </div>
</body>
</html>