
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "job_portal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
 $sql = "SELECT * FROM company";
// if($result = mysqli_query($link, $sql)){
//     if(mysqli_num_rows($result) > 0){
//         echo "<table>";
//             echo "<tr>";
//                 echo "<th>company_id</th>";
//                 echo "<th>company_name</th>";
//                 echo "<th>company_desc</th>";
//                 echo "<th>est_date</th>";
//                 echo "<th>website_url</th>";
//             echo "</tr>";
//         while($row = mysqli_fetch_array($result)){
//             echo "<tr>";
//                 echo "<td>" . $row['company_id'] . "</td>";
//                 echo "<td>" . $row['company_name'] . "</td>";
//                 echo "<td>" . $row['company_desc'] . "</td>";
//                 echo "<td>" . $row['est_date'] . "</td>";
//                 echo "<td>" . $row['website_url'] . "</td>";
//             echo "</tr>";
//         }
//         echo "</table>";
//         // Close result set
//         mysqli_free_result($result);
//     } else{
//         echo "No records matching your query were found.";
//     }
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 
// // Close connection
// mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>companies</title>
</head>
<body>
    <div style="text-align: center;">
    <h1>
        Company Details
    </h1>
    </div>
    <table style="border: 1px solid black">
    <thead>
        <tr style="border: 1px solid black">
            <th scope="col" style="border: 1px solid black">company_id</th>
            <th style="border: 1px solid black">company_name</th>
            <th style="border: 1px solid black">company_desc</th>
            <th style="border: 1px solid black">est_date</th>
            <th style="border: 1px solid black">website_url</th>
        </tr>
    </thead>
    <tbody>
        <?php
            
        if($result = mysqli_query($link, $sql)){
            while($row = mysqli_fetch_array($result)){?>
                            <tr style="border: 1px solid black">
                                <td style="border: 1px solid black"><?php echo $row['company_id'];?> </td>
                                <td style="border: 1px solid black"><?php echo $row['company_name'];?> </td>
                                <td style="border: 1px solid black"><?php echo $row['company_desc'];?> </td>
                                <td style="border: 1px solid black"><?php echo $row['est_date'];?> </td>
                                <td style="border: 1px solid black"><?php echo $row['website_url'];?> </td>
                            </tr>
           <?php }
        }
        ?>
    </tbody>

    </table>
</body>
</html>
