<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body >
    <div class="head" style="text-align: center; color:black; font-size:50px;
     background-color: rgba(187, 248, 178, 0.322);  padding: 30px; font-weight: bold; ">Manhole Monitoring</div>
    <nav class="nav">
        <ul class="list">
           <li><a href="index.php">Home</a> </li>
           <li><a href="status.php">Status</a> </li>
           <li><a href="report.php">Report</a> </li>
        </ul> 
   </nav>
   <div class="table">
    <!-- <h4 style="margin:30px; text-align: center;" >Last updated On 4pm</h4> -->
    <table class="status-table"  >
    <thead>
      <tr>
        <th >Manhole ID</th>
        <th > Lid Status</th>
        <th>Water Level</th>
        <th>Location</th>
        <th>Last updated</th>
      </tr>
    </thead> 
      <tbody>
        <br><br><br>
      <?php
          $conn = mysqli_connect("localhost", "root", "", "themebase");
          // Check connection
          if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT Mid,LidStatus,Wlevel,Mlocation,Ctime FROM statustable order by Ctime desc";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["Mid"]. "</td><td>" . $row["LidStatus"] . "</td><td>"
          . $row["Wlevel"]. "</td><td>". $row["Mlocation"] . "</td><td>". $row["Ctime"] ."</td></tr>";
          }
          echo "</table>";
          } else { echo "<h2>Currently there is no data</h2>"; }
          $conn->close();
    ?>
      <br><br><br><br>
      </tbody>
    </table>
    
   </div>
   
   
   
   <div class="contact" >
       
    <a href="https://www.instagram.com/_teja.09_/" target="__blank" style=" text-align:center; text-decoration: none; color: rgba(89, 87, 88, 0.661);"> <img src="../images/insta_logo.jpeg" alt="insta_logo" width="25px"></a>
    <div class="tooltip" style="padding-left:30px">
        <a  class="call" style=" text-align:center; text-decoration: none; "> <img src="../images/call_logo.png" alt="call_logo" width="24px"></a>
        <span class="tooltiptext">+91-08485-646821</span>
    </div>
</div>
    
    <footer class="footer" style="background-color: beige; text-align: center; padding: 10px; ">
        &copy;Theme Based Project.
    </footer>
  <script src="first.js" ></script>
</body>
</html>