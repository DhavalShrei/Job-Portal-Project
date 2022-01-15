<html>  
<head>  
    <title>updation</title> 
    <link rel = "stylesheet" type = "text/css" href = "style1.css">   
</head>  

<body style="background-color:rgb(188,231,229);">  
<div style="text-align: center;">
<h1>EMAIL ID UPDATE</h1>
<h3>Enter your username and new email id to update</h3>
</div>
    <div id = "frm">  
        <h1>Update email</h1>  
        <form name="f1" method = "POST">  
            <p>  
                <label> UserId: </label>  
                <input type = "text" id ="user_id" name  = "user_id" />  
            </p>  
            <p>  
                <label> New email id: </label>  
                <input type = "email" id ="email_id" name  = "email_id" />  
            </p>       
            <p>     
                <input type =  "submit" name="btn" id = "btn" value = "UPDATE" />  
            </p>  
        </form> 

    </div>
</body>     
</html>

<?php
if (isset($_POST['user_id']) && !empty($_POST['user_id']))
{
$link = mysqli_connect("localhost", "root", "", "job_portal");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$user_id = $_POST['user_id'];
$email_id = $_POST['email_id'];

$sql = "UPDATE user SET user_email='$email_id' WHERE user_iden='$user_id'";
$result=mysqli_query($link, $sql);
if($result){
    echo "<p><center>Records updation successful!</center></p>";
        echo "<br>";
        echo "<br>";
        echo("<p><center><button onclick=\"location.href='home.php'\">Back to Home</button></center></p>");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
}
?>
