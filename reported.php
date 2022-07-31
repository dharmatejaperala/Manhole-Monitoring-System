<?php
        session_start();
        // $server = "localhost";
        // $username = "root";
        // $password = "";
        //database
        $con = mysqli_connect('localhost','id18949334_themebasedproject','Webhost@2022','id18949334_themebase');

        if(!$con){
            die("Connection failed due to".mysqli_connect_error());
        }
         
            $sname = $_POST['name'];
            $slocation = $_POST['location'];
            $sconcern = $_POST['concern'];
            $sql = "INSERT INTO `id18949334_themebase`.`report` (`sname`, `location`, `concern`) VALUES ('$sname','$slocation','$sconcern');";
        
         
            if($con->query($sql) == true){
            //echo $sql;
            //echo "Successfully inserted" ;
            }
            else{
            echo "error $sql <br> $con->error";
            }
        
        
        $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks Page</title>
    <style>
        body{
            background-color: rgba(128, 255, 0, 0.125);
        }
        .reported p{
            background-color: rgba(170, 225, 235, 0.371);
            font-size: 22px;
            padding: 50px;
            margin-left: 30%;
            margin-right: 30%;
            margin-top: 20%;
            border: 1px solid rgb(129, 235, 143);
            border-radius: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="reported">
            <p id="thank">
                Thanks for sharing your concern with us!
            </p>
    </div>
   
</body>
</html>