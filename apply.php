<html>  
<head>  
    <title>job application</title> 
    <link rel = "stylesheet" type = "text/css" href = "style1.css">   
</head>  

<body style="background-color:rgb(188,231,229);">  
<div style="text-align: center;">
<h1>JOB APPLICATION</h1>
<h3>Enter your username, password and job id to apply to the job</h3>
</div>
    <div id = "frm">  
        <h1>Apply for job</h1>  
        <form name="f1" method = "POST">  
            <p>  
                <label> UserId: </label>  
                <input type = "text" id ="user_iden" name  = "user_iden" />  
            </p>  
            <p>  
                <label> Job Id: </label>  
                <input type = "text" id ="job_id" name  = "job_id" />  
            </p>  
            <p>  
                <label> Application description: </label>  
                <input type = "text" id ="app_type" name  = "app_type" />  
            </p>      
            <p>     
                <input type =  "submit" name="btn" id = "btn" value = "APPLY" />  
            </p>  
        </form> 

    </div>
</body>     
</html>  
<?php
if (isset($_POST['user_iden']) && !empty($_POST['user_iden']))
{
$link = mysqli_connect("localhost", "root", "", "job_portal");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$user_iden = $_POST['user_iden'];
$job_id = $_POST['job_id'];
$app_type = $_POST['app_type'];

$sql = "INSERT INTO job_applied ( user_iden, job_id, app_type) VALUES ('$user_iden', '$job_id', '$app_type')";
$result=mysqli_query($link, $sql);
if($result){
    echo "<p><center>Job application successful!</center></p>";
        echo "<br>";
        echo "<br>";
        echo("<p><center><button onclick=\"location.href='home.php'\">Move to Home</button></center></p>");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
}
?>
