<?php 
$dsn = "mysql:dbname=portfolio;host=localhost";
$pass = "";
$user = "root";
$dbh = new PDO($dsn,$user,$pass);

$name = $_POST['n'];
$Email = $_POST['e'];
$Message = $_POST['m'];

$sql = $dbh->prepare("INSERT INTO victorport (n, e, m) VALUES 
('$name', '$Email', '$Message' )");

$sql->bindvalue(":n",$name, PDO::PARAM_STR);
$sql->bindvalue(":e", $Email, PDO::PARAM_STR);
$sql->bindvalue(":m",$Message, PDO::PARAM_STR);

if($sql->execute()){ ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Message</title>
    <link rel="shortcut icon" href="">
    </head>
    <body>
    <center align>
    <div class="Container" style="margin-top:70px; padding:10px; background-color:#f9f9f9; border-radius:10px">
    
    <cite style="padding-top:40px;">You've successfully messaged Victor
    </cite><br>
    <img src="images/success1.png"><br>
    </div>
    </center align>
    </body>
    </html>
    <?php
    }
    else{?>
    <div class="Container" style="margin-top:70px; padding:10px; background-color:#f9f9f9; border-radius:10px">
    
    <cite style="padding-top:40px;">Oops couldn't successfully message Victor try again!!
       
    </cite><br>
    <img src="images/wrong.png">
    </div>
    </center align>
    </body>
    </html>
     <?php
    }
    
    ?>



