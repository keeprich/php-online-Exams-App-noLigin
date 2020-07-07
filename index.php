<?php

include_once'dbConnection.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="index.css">
    
    <!-- jquery cdn -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- jquery cdn -->
    <title>Document</title>

 

</head>
<body>
    
    <?php
include'includes/header.php';
    ?>

<div class="text_cent">
 


 <?php



// echo "<div class='table-container'>";
// echo "<center>";
// echo "<h2>Creating Online Quiz Application in PHP </h2>";
// echo "<h3>Using Mysqli Method</h3>";
// echo"<hr/>";

if(mysqli_num_rows($result) > 0) {
    echo"<table>";
    while($row=mysqli_fetch_array($result)){
echo "<tr>";
echo"<td>".$row['Qid'].". ".$row['Question']. "</td>";
echo"</tr>";


// echo "<tr>";
echo"<td><input type='radio' id='option1' name=".$row['Qid']." class='radoptions' value=".$row['option1']."/>".$row['Option1']. "";
 

echo"<td><input type='radio' id='option2' name=".$row['Qid']." class='radoptions' value=".$row['option2']."/>".$row['Option2']. "";
 

echo"<td><input type='radio' id='option3' name=".$row['Qid']." class='radoptions' value=".$row['option3']."/>".$row['Option3']. "";
 

echo"<td><input type='radio' id='option4' name=".$row['Qid']." class='radoptions' value=".$row['option4']."/>".$row['Option4']. "";

// echo"</td>";
// echo"</tr>";
echo"<br><br>";


// 

 



echo"<tr>";
echo"<td><span id='span1' class='radoptions' style='color:green; display:none;'><b> The Correct Answer Is: ".$row['Corrans']; "</b></span></td>";
echo"</tr>";


    }
    echo"</table>";
}

// echo "<div>"
?>
</div>

<button id="but1" type="button" class="button is-large is-fullwidth is-success is-rounded" onclick="displayans()">Submit</button>
<label id="Labmsg"></label>




     <!--  -->
     <!-- <div class="field has-addons">
  <div class="control is-expanded">
    <div class="select is-fullwidth">
      <select name="country">
        <option value="Argentina">Argentina</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Brazil">Brazil</option>
        <option value="Chile">Chile</option>
        <option value="Colombia">Colombia</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Guyana">Guyana</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Suriname">Suriname</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Venezuela">Venezuela</option>
      </select>
    </div>
  </div>
</div> -->

     <!--  -->



      <br><br> 



    <script src="index.js"></script>

</body>
</html>