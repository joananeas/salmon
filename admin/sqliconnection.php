<?php 
    $file = fopen("db.php", "w") or die("Cannot open file.");
    // define the data to be written to the file
    $textServer = "server";
    $textUsername = "username";
    $textPasswd = "passwd";
    $textDB = "db";

    $server = $_POST['server'];
	$username= $_POST['username'];
	$passwd = $_POST['passwd'];
	$db = $_POST['db'];

    
    $textOnFile = "<?php
    $$textServer = '$server';\n
    $$textUsername = '$username';\n
    $$textPasswd = '$passwd';\n
    $$textDB = '$db';\n?>\n";

    // Overwrites the file
    fwrite($file, $textOnFile);
    // Close the file
    fclose($file);
    echo "Done! <a href='./../index.php'>Try it out</a>\t<a href='./index.php'>Return to admin</a>";
?>