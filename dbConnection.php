<?php
$dbHost = "localhost";
$dbName = "phpExamsNoLogin";
$dbUsername = "keeprich";
$dbPassword = "keeprich";


$conn = mysqli_connect("$dbHost", "$dbUsername", "$dbPassword", "$dbName");

if(mysqli_connect_error()){
    echo "Failed to connect to Database".mysqli_connect_error;
} 

$selectTable = "SELECT * FROM onlineExams";

$result = mysqli_query($conn, $selectTable);

// echo "<center>";
// echo "<h2>Creating Online Quiz Application in PHP </h2>";
// echo "<h3>Using Mysqli Method</h3>";
// echo"<hr/>";

// if(mysqli_num_rows($result) > 0) {
//     echo"<table>";
//     while($row=mysqli_fetch_array($result)){
// echo "<tr>";
// echo"<td>".$row['Qid']."".$row['Question']. "</td>";
// echo"</tr>";


// echo "<tr>";
// echo"<td><input type='radio' id='option1' name=".$row['Qid']." class='radoptions' value=".$row['option1']."/>".$row['Option1']. "";
// echo"<td><input type='radio' id='option2' name=".$row['Qid']." class='radoptions' value=".$row['option2']."/>".$row['Option2']. "";
// echo"<td><input type='radio' id='option3' name=".$row['Qid']." class='radoptions' value=".$row['option3']."/>".$row['Option3']. "";
// echo"<td><input type='radio' id='option4' name=".$row['Qid']." class='radoptions' value=".$row['option4']."/>".$row['Option4']. "";

// echo"</td>";
// echo"</tr>";

// echo"<tr>";
// echo"<td><span id='span1' class='radoptions' style='color:green; display:none;'><hr/><b> The Correct Answer Is: ".$row['Corrans']; "</b><hr/></span></td>";
// echo"</tr>";


//     }
//     echo"</table>";
// }
// echo"</center>";

mysqli_close($conn);
?>