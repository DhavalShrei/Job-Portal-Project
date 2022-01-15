<html>  
<head>  
    <title>login page</title> 
    <link rel = "stylesheet" type = "text/css" href = "style1.css">   
</head>  
<body style="background-color:rgb(188,231,229);">  
<div style="text-align: center;">
<h1>JOB PORTAL</h1>
<h3>Enter your username and password to login</h3>
</div>
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" method = "POST">  
            <p>  
                <label> UserId: </label>  
                <input type = "text" id ="login_id" name  = "login_id" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="login_pass" name  = "login_pass" />  
            </p>      
            <p>     
                <input type =  "submit" name="btn" id = "btn" value = "LOGIN" />  
            </p>  
            <a href="register.php">Not registered,sign up here.</a> 
        </form> 

    </div>
</body>     
</html>  
<?php
if (isset($_POST['login_id']) && !empty($_POST['login_id']))
{
$link = mysqli_connect("localhost", "root", "", "job_portal");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$login_id = $_POST['login_id'];
$login_pass = $_POST['login_pass'];

$sql = "SELECT * FROM user WHERE user_iden='$login_id' AND user_pass='$login_pass'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0)
    {
        echo "<p><center>LOGIN SUCCESSFUL!</center></p>";
        echo "<br>";
        echo "<br>";
        echo("<p><center><button onclick=\"location.href='home.php'\">Move to Home</button></center></p>");
        
    }
    else
    {
        if(isset($_POST['btn']))
            echo "<p><center>Invalid login id or password!</center></p>";
    }
}
// Close connection
mysqli_close($link);
}
?>