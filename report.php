<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body >
    <div class="head" style="text-align: center; color:black; font-size:50px;
     background-color: rgba(187, 248, 178, 0.322);  padding: 30px; font-weight: bold; ">Manhole Monitoring</div>
    <nav class="nav">
        <ul class="list">
           <li><a href="index.php"> Home </a> </li>
           <li><a href="status.php"> Status </a> </li>
           <li><a href="report.php"> Report </a> </li>
        </ul>
   </nav>
   <form  action="reported.php" method="POST" class="comment" id="comment" >
        <h3>Report your concern by sharing required details below!</h3>
        <hr style="width: 600px;">
        <br><br>
        <p>Name <input type="text" name="name"  placeholder="Enter your name"></p>
        <p>Location <input type="text" name="location"  required placeholder="Street"></p>
        <p style=" padding:8px;">Concern</p>
        <textarea placeholder="Describe problem" name="concern"  style="width: 690px; height:162px; resize: none; padding: 10px; font-size: 18px;  display: block;" ></textarea>
        <button  type="submit" value="submit" style="padding: 4px; margin:5px;">Report</button>
   </form>

   
   <div class="contact" >
       
        <a href="https://www.instagram.com/_teja.09_/" target="__blank" style=" text-align:center; text-decoration: none; color: rgba(89, 87, 88, 0.661);"> <img src="../images/insta_logo.jpeg" alt="insta_logo" width="25px"></a>
        <div class="tooltip" style="padding-left:30px">
            <a  class="call" style=" text-align:center; text-decoration: none; "> <img src="../images/call_logo.png" alt="call_logo" width="24px"></a>
            <span class="tooltiptext">+91-08485-646821</span>
        </div>
    </div>
  
    <footer class="footer" style="background-color:bisque; text-align: center; padding: 10px;">
        &copy;Theme Based Project.
    </footer>

</body>
</html>