<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>google jobs</title>
</head>
<body>
    <div style="text-align: center;">
    <h1>
        Jobs at Google
    </h1>
    </div>
</body>
</html>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "job_portal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM job WHERE company_id='goog12'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>job_id</th>";
                echo "<th>job_title</th>";
                echo "<th>job_desc</th>";
                echo "<th>job_location</th>";
                echo "<th>salary</th>";
                echo "<th>skill_required</th>";
                echo "<th>company_id</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['job_id'] . "</td>";
                echo "<td>" . $row['job_title'] . "</td>";
                echo "<td>" . $row['job_desc'] . "</td>";
                echo "<td>" . $row['job_location'] . "</td>";
                echo "<td>" . $row['salary'] . "</td>";
                echo "<td>" . $row['skill_req'] . "</td>";
                echo "<td>" . $row['company_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>