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
        <p>This is the db connection configuration, you can change the parameters later.</p>
            <form method="post" action="sqliconnection.php">
                <label>User:</label>
                <input type="text" name="username" value="db-username"><br><br>
                <label>Password:</label>
                <input type="text" name="passwd" value="str0ng-passwd"><br><br>
                <label>DB:</label>
                <input type="text" name="db" value="db-name"><br><br>
                <label>Server:</label>
                <input type="text" name="server" value="localhost"><br><br>
                <button type="submit" name="upload" value="upload" accesskey="enter">Upload</button><br>
            </form>
       </div> 
    </body>
</html>

